<?php
namespace AppBundle\Model;

class Aria 
{
	private $id;
	private $gid;
	private $filename;
	
	public function __construct($id = null){
		$this->id = $id;
	}
	
	// GETTERS
	public function getId() {
		return $this->id;
	}
	
	public function getGid() {
		return $this->gid;
	}
	
	public function getFilename() {
		return $this->filename;
	}
	
	// SETTERS
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	public function setGid($gid) {
		$this->gid = $gid;
		return $this;
	}
	
	public function setFilename($filaname) {
		$this->filename = $filaname;
		return $this;
	}
}