<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Stat {
	private $downloadSpeed;
	private $uploadSpeed;
	private $numActive;
	private $numWaiting;
	private $numStopped;
	private $numStoppedTotal;
	
	public function __construct() {
		//TODO: generate construc
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

	public function getNumActive()
	{
		return $this->numActive;
	}

	public function setNumActive($numActive)
	{
		$this->numActive = $numActive;
		return $this;
	}

	public function getNumWaiting()
	{
		return $this->numWaiting;
	}

	public function setNumWaiting($numWaiting)
	{
		$this->numWaiting = $numWaiting;
		return $this;
	}

	public function getNumStopped()
	{
		return $this->numStopped;
	}

	public function setNumStopped($numStopped)
	{
		$this->numStopped = $numStopped;
		return $this;
	}

	public function getNumStoppedTotal()
	{
		return $this->numStoppedTotal;
	}

	public function setNumStoppedTotal($numStoppedTotal)
	{
		$this->numStoppedTotal = $numStoppedTotal;
		return $this;
	}
	
	
}