<?php
namespace AppBundle\Model;

class Aria 
{
	
	private $fileName;
	
	private $folderName;
	
	private $fileSize;
	
	private $startDate;
	
	private $stopDate;
	
	private $status;
	
	
	public function __construct($id = null, $url){
		$this->id = $id;
		$this->url = $url;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
	public function setUrl($url) {
		$this->url = $url;
		return $this;
	}
	
	public function getFileName() {
		return $this->fileName;
	}
	public function setFileName($fileName) {
		$this->fileName = $fileName;
		return $this;
	}
	public function getFolderName() {
		return $this->folderName;
	}
	public function setFolderName($folderName) {
		$this->folderName = $folderName;
		return $this;
	}
	public function getFileSize() {
		return $this->fileSize;
	}
	public function setFileSize($fileSize) {
		$this->fileSize = $fileSize;
		return $this;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
		return $this;
	}
	public function getStopDate() {
		return $this->stopDate;
	}
	public function setStopDate($stopDate) {
		$this->stopDate = $stopDate;
		return $this;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}
	
}