<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Aria {
	private $gid;
	private $status;
	private $totalLength;
	private $completedLength;
	private $uploadLength;
	private $bitfield;
	private $downloadSpeed;
	private $uploadSpeed;
	private $infoHash;
	private $numSeeders;
	private $seeder;
	private $pieceLength;
	private $numPieces;
	private $connections;
	private $errorCode;
	private $errorMessage;
	private $followedBy;
	private $following;
	private $belongsTo;
	private $dir;
	private $files;
	private $bittorrent;
	private $verifiedLength;
	private $verifyIntegrityPending;
	
	public function __construct($gid) {
		$this->gid = $gid;
	}

	public function getGid()
	{
		return $this->gid;
	}

	public function setGid($gid)
	{
		$this->gid = $gid;
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

	public function getTotalLength()
	{
		return $this->totalLength;
	}

	public function setTotalLength($totalLength)
	{
		$this->totalLength = $totalLength;
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

	public function getUploadLength()
	{
		return $this->uploadLength;
	}

	public function setUploadLength($uploadLength)
	{
		$this->uploadLength = $uploadLength;
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

	public function getInfoHash()
	{
		return $this->infoHash;
	}

	public function setInfoHash($infoHash)
	{
		$this->infoHash = $infoHash;
		return $this;
	}

	public function getNumSeeders()
	{
		return $this->numSeeders;
	}

	public function setNumSeeders($numSeeders)
	{
		$this->numSeeders = $numSeeders;
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

	public function getPieceLength()
	{
		return $this->pieceLength;
	}

	public function setPieceLength($pieceLength)
	{
		$this->pieceLength = $pieceLength;
		return $this;
	}

	public function getNumPieces()
	{
		return $this->numPieces;
	}

	public function setNumPieces($numPieces)
	{
		$this->numPieces = $numPieces;
		return $this;
	}

	public function getConnections()
	{
		return $this->connections;
	}

	public function setConnections($connections)
	{
		$this->connections = $connections;
		return $this;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		return $this;
	}

	public function getErrorMessage()
	{
		return $this->errorMessage;
	}

	public function setErrorMessage($errorMessage)
	{
		$this->errorMessage = $errorMessage;
		return $this;
	}

	public function getFollowedBy()
	{
		return $this->followedBy;
	}

	public function setFollowedBy($followedBy)
	{
		$this->followedBy = $followedBy;
		return $this;
	}

	public function getFollowing()
	{
		return $this->following;
	}

	public function setFollowing($following)
	{
		$this->following = $following;
		return $this;
	}

	public function getBelongsTo()
	{
		return $this->belongsTo;
	}

	public function setBelongsTo($belongsTo)
	{
		$this->belongsTo = $belongsTo;
		return $this;
	}

	public function getDir()
	{
		return $this->dir;
	}

	public function setDir($dir)
	{
		$this->dir = $dir;
		return $this;
	}

	public function getFiles()
	{
		return $this->files;
	}

	public function setFiles(File $files)
	{
		$this->files = $files;
		return $this;
	}

	public function getBittorrent()
	{
		return $this->bittorrent;
	}

	public function setBittorrent(BitTorrent $bittorrent)
	{
		$this->bittorrent = $bittorrent;
		return $this;
	}

	public function getVerifiedLength()
	{
		return $this->verifiedLength;
	}

	public function setVerifiedLength($verifiedLength)
	{
		$this->verifiedLength = $verifiedLength;
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