<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class File {
	private $index;
	private $path;
	private $length;
	private $completedLength;
	private $selected;
	private $uris;
	
	public function __construct() {
		//TODO: generation construct
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

	public function getPath()
	{
		return $this->path;
	}

	public function setPath($path)
	{
		$this->path = $path;
		return $this;
	}

	public function getLength()
	{
		return $this->length;
	}

	public function setLength($length)
	{
		$this->length = $length;
		return $this;
	}

	public function getCompletedLength()
	{
		return $this->completedLength;
	}

	public function setCompletedLength($completedLength)
	{
		$this->completedLength = $completedLength;
		return $this;
	}

	public function getSelected()
	{
		return $this->selected;
	}

	public function setSelected($selected)
	{
		$this->selected = $selected;
		return $this;
	}

	public function getUris()
	{
		return $this->uris;
	}

	public function setUris(Uri $uris)
	{
		$this->uris = $uris;
		return $this;
	}
	
	
	
}