<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;


class DirectLink {
	private $url; // array d'url
	private $option;
	
	public function __construct(){
		//TODO: generate construction 
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	public function getOption()
	{
		return $this->option;
	}

	public function setOption(Option $option)
	{
		$this->option = $option;
		return $this;
	}
}