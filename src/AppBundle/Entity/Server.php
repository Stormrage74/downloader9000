<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Server {
	
	private $index;
	private $servers;
	
	public function __construct() {
		//TODO: generating construct
	}

	public function getIndex()
	{
		return $this->index;
	}

	public function setIndex($index)
	{
		$this->index = $index;
		return $this;
	}

	public function getServers()
	{
		return $this->servers;
	}

	public function setServers($uri, $currentUri, $downloadSpeed)
	{
		$servers = array( 
			"uri" => $uri, 
			"currentUri" => $currentUri, 
			"downloadSpeed" => $downloadSpeed
		);
		array_push($this->servers, $servers);
		return $this;
	}
	
	
	
}