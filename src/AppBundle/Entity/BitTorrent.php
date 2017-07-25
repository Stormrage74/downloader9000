<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;


class BitTorrent {
	private $announceList;
	private $comment;
	private $creationDate;
	private $mode;
	private $info;
	private $info;
	private $verifyIntegrityPending;
	
	public function __construct() {
		//TODO: generation construct
	}

	public function getAnnounceList()
	{
		return $this->announceList;
	}

	public function setAnnounceList($announceList)
	{
		$this->announceList = $announceList;
		return $this;
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function setComment($comment)
	{
		$this->comment = $comment;
		return $this;
	}

	public function getCreationDate()
	{
		return $this->creationDate;
	}

	public function setCreationDate($creationDate)
	{
		$this->creationDate = $creationDate;
		return $this;
	}

	public function getMode()
	{
		return $this->mode;
	}

	public function setMode($mode)
	{
		$this->mode = $mode;
		return $this;
	}

	public function getInfo()
	{
		return $this->info;
	}

	public function setInfo($info)
	{
		$this->info = $info;
		return $this;
	}

	public function getInfo()
	{
		return $this->info;
	}

	public function setInfo($info)
	{
		$this->info = $info;
		return $this;
	}

	public function getVerifyIntegrityPending()
	{
		return $this->verifyIntegrityPending;
	}

	public function setVerifyIntegrityPending($verifyIntegrityPending)
	{
		$this->verifyIntegrityPending = $verifyIntegrityPending;
		return $this;
	}
	
	
}