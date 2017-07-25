<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Uri {
	private $uri;
	private $status;
	
	public function __construct() {
		//TODO: generation construct
	}

	public function getUri()
	{
		return $this->uri;
	}

	public function setUri($uri)
	{
		$this->uri = $uri;
		return $this;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}
	
	
	
}