<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Peer {
	private $peerId;
	private $ip;
	private $port;
	private $bitfield;
	private $amChoking;
	private $peerChoking;
	private $downloadSpeed;
	private $uploadSpeed;
	private $seeder;
	
	public function __construc(){
		//TODO: generating construct
	}

	public function getPeerId()
	{
		return $this->peerId;
	}

	public function setPeerId($peerId)
	{
		$this->peerId = $peerId;
		return $this;
	}

	public function getIp()
	{
		return $this->ip;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		return $this;
	}

	public function getPort()
	{
		return $this->port;
	}

	public function setPort($port)
	{
		$this->port = $port;
		return $this;
	}

	public function getBitfield()
	{
		return $this->bitfield;
	}

	public function setBitfield($bitfield)
	{
		$this->bitfield = $bitfield;
		return $this;
	}

	public function getAmChoking()
	{
		return $this->amChoking;
	}

	public function setAmChoking($amChoking)
	{
		$this->amChoking = $amChoking;
		return $this;
	}

	public function getPeerChoking()
	{
		return $this->peerChoking;
	}

	public function setPeerChoking($peerChoking)
	{
		$this->peerChoking = $peerChoking;
		return $this;
	}

	public function getDownloadSpeed()
	{
		return $this->downloadSpeed;
	}

	public function setDownloadSpeed($downloadSpeed)
	{
		$this->downloadSpeed = $downloadSpeed;
		return $this;
	}

	public function getUploadSpeed()
	{
		return $this->uploadSpeed;
	}

	public function setUploadSpeed($uploadSpeed)
	{
		$this->uploadSpeed = $uploadSpeed;
		return $this;
	}

	public function getSeeder()
	{
		return $this->seeder;
	}

	public function setSeeder($seeder)
	{
		$this->seeder = $seeder;
		return $this;
	}
	
}