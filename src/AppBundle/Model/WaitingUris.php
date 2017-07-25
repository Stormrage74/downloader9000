<?php
namespace AppBundle\Model;

class WaitingUris
{
	private $id;
	private $url;
	private $createDate;
	private $alterDate;
	
	
	public function __construct($id = null) {
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
		return $this;
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

	public function getCreateDate()
	{
		return $this->createDate;
	}

	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;
		return $this;
	}

	public function getAlterDate()
	{
		return $this->alterDate;
	}

	public function setAlterDate($alterDate)
	{
		$this->alterDate = $alterDate;
		return $this;
	}
	
	
	
}