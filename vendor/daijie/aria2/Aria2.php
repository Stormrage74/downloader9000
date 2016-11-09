<?php
class Aria2
{
    protected $server;
    protected $ch;
    
    function __construct($server='http://192.168.0.72:6800/jsonrpc')
    {
        $this->server = $server;
        $this->ch = curl_init($server);
        curl_setopt_array($this->ch, array(
            CURLOPT_POST=>true,
            CURLOPT_RETURNTRANSFER=>true,
            CURLOPT_HEADER=>false
        ));
    }
    
    function __destruct()
    {
        curl_close($this->ch);
    }
    
    protected function req($data)
    {
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);        
        return curl_exec($this->ch);
    }
    
    function __call($name, $arg)
    {
        $data = array(
            'jsonrpc'=>'2.0',
            'id'=>'1',
            'method'=>'aria2.'.$name,
            'params'=>$arg
        );
        $data = json_encode($data);
        $response = $this->req($data);
        if($response===false) {
            trigger_error(curl_error($this->ch));
        }
        return json_decode($response, 1);
    }
}
