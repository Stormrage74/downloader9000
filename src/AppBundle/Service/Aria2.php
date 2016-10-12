<?php

namespace AppBundle\Service;

class Aria2
{
	protected $server;
	protected $ch;
	protected $options;
	
	public function __construct($server) {
		
		$this->server = $server;
		$this->ch = curl_init($server);
		curl_setopt_array($this->ch, array(
				CURLOPT_POST=>true,
				CURLOPT_RETURNTRANSFER=>true,
				CURLOPT_HEADER=> false
		));
		
	}
	
	public function __call($name, $arg)
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
		curl_close($this->ch);
		return json_decode($response, 1);
	}
	
	protected function req($data)
	{
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
		return curl_exec($this->ch);
	}
	
	public function __destruct()
	{
		curl_close($this->ch);
	}
	
	function getServer() {
		return $this->server;
	}
	
	function getPort() {
		return $this->port;
	}
	
	function getJsonPath() {
		return $this->jsonPath;
	}
	
	public function setServer($server) {
		$this->server = $server;
		return $this;
	}

	/*
	// On parcourt les POST et on construit un appel vers le RPC
	public function multicall()
	{
		$data = array();
		foreach($_POST as $c => $g)
		{
			$data[$c] = $g;
		}
		$response = $this->req($data);
		if($response===false) {
			trigger_error(curl_error($this->ch));
		}
		return $response;
	}
	*/
	// Construction de l'URL à requêter à partir du tableau de paramètres
}