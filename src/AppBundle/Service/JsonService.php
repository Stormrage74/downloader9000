<?php

namespace AppBundle\Service;

class JsonService {
	private $jsonUrl = "http://192.168.0.11:6800/jsonrpc"; 
	private $json;
	private $method;
	
	public function getJsonUrl() {
		return $this->jsonUrl;
	}
	
	public function setJsonUrl($jsonUrl){
		$this->jsonUrl= $jsonUrl;
		return $this;
	}
	
	public function getJson() {
		return $this->json;
	}
	
	public function setJson($json) {
		$this->json = $json;
		return $this;
	}
	
	public function doPost() {
		return $this->mainCall();
	}
	
	public function doGet() {
		return $this->mainCall();
	}
	
	private function mainCall(){
		$this->json = file_get_contents($this->jsonurl);
		return json_decode($this->getJson());
	}
}