<?php
namespace AppBundle\Model;

class Download
{
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
	private $bitTorrent;
	private $verifiedLengths;
	private $verifyIntegrityPending;
	
	public function __construct($id = null) {
		$this->gid = $id;
	}
	
	// GETTERS
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getGid() {
		return $this->gid;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getTotalLength() {
		return $this->totalLength;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getCompletedLength() {
		return $this->completedLength;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getUploadLength() {
		return $this->uploadLength;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBitfield() {
		return $this->bitfield;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDownloadSpeed() {
		return $this->downloadSpeed;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getUploadSpeed() {
		return $this->uploadSpeed;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getInfoHash() {
		return $this->infoHash;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getNumSeeders() {
		return $this->numSeeders;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getSeeder() {
		return $this->seeder;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getPieceLength() {
		return $this->pieceLength;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getNumPieces() {
		return $this->numPieces;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getConnections() {
		return $this->connections;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getErrorCode() {
		return $this->errorCode;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getErrorMessage() {
		return $this->errorMessage;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getFollowedBy() {
		return $this->followedBy;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getFollowing() {
		return $this->following;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBelongsTo() {
		return $this->belongsTo;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getDir() {
		return $this->dir;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getFiles() {
		return $this->files;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getBitTorrent() {
		return $this->bitTorrent;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVerifiedLengths() {
		return $this->verifiedLengths;
	}
	
	/**
	 *
	 * @return the unknown_type
	 */
	public function getVerifyIntegrityPending() {
		return $this->verifyIntegrityPending;
	}
	
	// SETTERS
	
	/**
	 *
	 * @param unknown_type $gid        	
	 */
	public function setGid($gid) {
		$this->gid = $gid;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $status        	
	 */
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $totalLength        	
	 */
	public function setTotalLength($totalLength) {
		$this->totalLength = $totalLength;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $completedLength        	
	 */
	public function setCompletedLength($completedLength) {
		$this->completedLength = $completedLength;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $uploadLength        	
	 */
	public function setUploadLength($uploadLength) {
		$this->uploadLength = $uploadLength;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $bitfield        	
	 */
	public function setBitfield($bitfield) {
		$this->bitfield = $bitfield;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $downloadSpeed        	
	 */
	public function setDownloadSpeed($downloadSpeed) {
		$this->downloadSpeed = $downloadSpeed;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $uploadSpeed        	
	 */
	public function setUploadSpeed($uploadSpeed) {
		$this->uploadSpeed = $uploadSpeed;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $infoHash        	
	 */
	public function setInfoHash($infoHash) {
		$this->infoHash = $infoHash;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $numSeeders        	
	 */
	public function setNumSeeders($numSeeders) {
		$this->numSeeders = $numSeeders;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $seeder        	
	 */
	public function setSeeder($seeder) {
		$this->seeder = $seeder;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $pieceLength        	
	 */
	public function setPieceLength($pieceLength) {
		$this->pieceLength = $pieceLength;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $numPieces        	
	 */
	public function setNumPieces($numPieces) {
		$this->numPieces = $numPieces;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $connections        	
	 */
	public function setConnections($connections) {
		$this->connections = $connections;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $errorCode        	
	 */
	public function setErrorCode($errorCode) {
		$this->errorCode = $errorCode;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $errorMessage        	
	 */
	public function setErrorMessage($errorMessage) {
		$this->errorMessage = $errorMessage;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $followedBy        	
	 */
	public function setFollowedBy($followedBy) {
		$this->followedBy = $followedBy;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $following        	
	 */
	public function setFollowing($following) {
		$this->following = $following;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $belongsTo        	
	 */
	public function setBelongsTo($belongsTo) {
		$this->belongsTo = $belongsTo;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $dir        	
	 */
	public function setDir($dir) {
		$this->dir = $dir;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $files        	
	 */
	public function setFiles($files) {
		$this->files = $files;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $bitTorrent        	
	 */
	public function setBitTorrent($bitTorrent) {
		$this->bitTorrent = $bitTorrent;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $verifiedLengths        	
	 */
	public function setVerifiedLengths($verifiedLengths) {
		$this->verifiedLengths = $verifiedLengths;
		return $this;
	}
	
	/**
	 *
	 * @param unknown_type $verifyIntegrityPending        	
	 */
	public function setVerifyIntegrityPending($verifyIntegrityPending) {
		$this->verifyIntegrityPending = $verifyIntegrityPending;
		return $this;
	}
	
	
	

}