<?php
/**
 * @author gsimar
 */

namespace AppBundle\Entity;

class Option{
	private $allproxy;
	private $allproxypasswd;
	private $allproxyuser;
	private $allowoverwrite;
	private $allowpiecelengthchange;
	private $alwaysresume;
	private $asyncdns;
	private $autofilerenaming;
	private $btenablehookafterhashcheck;
	private $btenablelpd;
	private $btexcludetracker;
	private $btexternalip;
	private $btforceencryption;
	private $bthashcheckseed;
	private $btmaxpeers;
	private $btmetadataonly;
	private $btmincryptolevel;
	private $btprioritizepiece;
	private $btremoveunselectedfile;
	private $btrequestpeerspeedlimit;
	private $btrequirecrypto;
	private $btsavemetadata;
	private $btseedunverified;
	private $btstoptimeout;
	private $bttracker;
	private $bttrackerconnecttimeout;
	private $bttrackerinterval;
	private $bttrackertimeout;
	private $checkintegrity;
	private $checksum;
	private $conditionalget;
	private $connecttimeout;
	private $contentdispositiondefaultutf8;
	private $continue;
	private $dir;
	private $dryrun;
	private $enablehttpkeepalive;
	private $enablehttppipelining;
	private $enablemmap;
	private $enablepeerexchange;
	private $fileallocation;
	private $followmetalink;
	private $followtorrent;
	private $forcesave;
	private $ftppasswd;
	private $ftppasv;
	private $ftpproxy;
	private $ftpproxypasswd;
	private $ftpproxyuser;
	private $ftpreuseconnection;
	private $ftptype;
	private $ftpuser;
	private $gid;
	private $hashcheckonly;
	private $header;
	private $httpacceptgzip;
	private $httpauthchallenge;
	private $httpnocache;
	private $httppasswd;
	private $httpproxy;
	private $httpproxypasswd;
	private $httpproxyuser;
	private $httpuser;
	private $httpsproxy;
	private $httpsproxypasswd;
	private $httpsproxyuser;
	private $indexout;
	private $lowestspeedlimit;
	private $maxconnectionperserver;
	private $maxdownloadlimit;
	private $maxfilenotfound;
	private $maxmmaplimit;
	private $maxresumefailuretries;
	private $maxtries;
	private $maxuploadlimit;
	private $metalinkbaseuri;
	private $metalinkenableuniqueprotocol;
	private $metalinklanguage;
	private $metalinklocation;
	private $metalinkos;
	private $metalinkpreferredprotocol;
	private $metalinkversion;
	private $minsplitsize;
	private $nofileallocationlimit;
	private $nonetrc;
	private $noproxy;
	private $out;
	private $parameterizeduri;
	private $pause;
	private $pausemetadata;
	private $piecelength;
	private $proxymethod;
	private $realtimechunkchecksum;
	private $referer;
	private $remotetime;
	private $removecontrolfile;
	private $retrywait;
	private $reuseuri;
	private $rpcsaveuploadmetadata;
	private $seedratio;
	private $seedtime;
	private $selectfile;
	private $split;
	private $sshhostkeymd;
	private $streampieceselector;
	private $timeout;
	private $uriselector;
	private $usehead;
	private $useragent;
	
	public function __construct(){
		//TODO : generate construction
	}

	public function getAllproxy()
	{
		return $this->allproxy;
	}

	public function setAllproxy($allproxy)
	{
		$this->allproxy = $allproxy;
		return $this;
	}

	public function getAllproxypasswd()
	{
		return $this->allproxypasswd;
	}

	public function setAllproxypasswd($allproxypasswd)
	{
		$this->allproxypasswd = $allproxypasswd;
		return $this;
	}

	public function getAllproxyuser()
	{
		return $this->allproxyuser;
	}

	public function setAllproxyuser($allproxyuser)
	{
		$this->allproxyuser = $allproxyuser;
		return $this;
	}

	public function getAllowoverwrite()
	{
		return $this->allowoverwrite;
	}

	public function setAllowoverwrite($allowoverwrite)
	{
		$this->allowoverwrite = $allowoverwrite;
		return $this;
	}

	public function getAllowpiecelengthchange()
	{
		return $this->allowpiecelengthchange;
	}

	public function setAllowpiecelengthchange($allowpiecelengthchange)
	{
		$this->allowpiecelengthchange = $allowpiecelengthchange;
		return $this;
	}

	public function getAlwaysresume()
	{
		return $this->alwaysresume;
	}

	public function setAlwaysresume($alwaysresume)
	{
		$this->alwaysresume = $alwaysresume;
		return $this;
	}

	public function getAsyncdns()
	{
		return $this->asyncdns;
	}

	public function setAsyncdns($asyncdns)
	{
		$this->asyncdns = $asyncdns;
		return $this;
	}

	public function getAutofilerenaming()
	{
		return $this->autofilerenaming;
	}

	public function setAutofilerenaming($autofilerenaming)
	{
		$this->autofilerenaming = $autofilerenaming;
		return $this;
	}

	public function getBtenablehookafterhashcheck()
	{
		return $this->btenablehookafterhashcheck;
	}

	public function setBtenablehookafterhashcheck($btenablehookafterhashcheck)
	{
		$this->btenablehookafterhashcheck = $btenablehookafterhashcheck;
		return $this;
	}

	public function getBtenablelpd()
	{
		return $this->btenablelpd;
	}

	public function setBtenablelpd($btenablelpd)
	{
		$this->btenablelpd = $btenablelpd;
		return $this;
	}

	public function getBtexcludetracker()
	{
		return $this->btexcludetracker;
	}

	public function setBtexcludetracker($btexcludetracker)
	{
		$this->btexcludetracker = $btexcludetracker;
		return $this;
	}

	public function getBtexternalip()
	{
		return $this->btexternalip;
	}

	public function setBtexternalip($btexternalip)
	{
		$this->btexternalip = $btexternalip;
		return $this;
	}

	public function getBtforceencryption()
	{
		return $this->btforceencryption;
	}

	public function setBtforceencryption($btforceencryption)
	{
		$this->btforceencryption = $btforceencryption;
		return $this;
	}

	public function getBthashcheckseed()
	{
		return $this->bthashcheckseed;
	}

	public function setBthashcheckseed($bthashcheckseed)
	{
		$this->bthashcheckseed = $bthashcheckseed;
		return $this;
	}

	public function getBtmaxpeers()
	{
		return $this->btmaxpeers;
	}

	public function setBtmaxpeers($btmaxpeers)
	{
		$this->btmaxpeers = $btmaxpeers;
		return $this;
	}

	public function getBtmetadataonly()
	{
		return $this->btmetadataonly;
	}

	public function setBtmetadataonly($btmetadataonly)
	{
		$this->btmetadataonly = $btmetadataonly;
		return $this;
	}

	public function getBtmincryptolevel()
	{
		return $this->btmincryptolevel;
	}

	public function setBtmincryptolevel($btmincryptolevel)
	{
		$this->btmincryptolevel = $btmincryptolevel;
		return $this;
	}

	public function getBtprioritizepiece()
	{
		return $this->btprioritizepiece;
	}

	public function setBtprioritizepiece($btprioritizepiece)
	{
		$this->btprioritizepiece = $btprioritizepiece;
		return $this;
	}

	public function getBtremoveunselectedfile()
	{
		return $this->btremoveunselectedfile;
	}

	public function setBtremoveunselectedfile($btremoveunselectedfile)
	{
		$this->btremoveunselectedfile = $btremoveunselectedfile;
		return $this;
	}

	public function getBtrequestpeerspeedlimit()
	{
		return $this->btrequestpeerspeedlimit;
	}

	public function setBtrequestpeerspeedlimit($btrequestpeerspeedlimit)
	{
		$this->btrequestpeerspeedlimit = $btrequestpeerspeedlimit;
		return $this;
	}

	public function getBtrequirecrypto()
	{
		return $this->btrequirecrypto;
	}

	public function setBtrequirecrypto($btrequirecrypto)
	{
		$this->btrequirecrypto = $btrequirecrypto;
		return $this;
	}

	public function getBtsavemetadata()
	{
		return $this->btsavemetadata;
	}

	public function setBtsavemetadata($btsavemetadata)
	{
		$this->btsavemetadata = $btsavemetadata;
		return $this;
	}

	public function getBtseedunverified()
	{
		return $this->btseedunverified;
	}

	public function setBtseedunverified($btseedunverified)
	{
		$this->btseedunverified = $btseedunverified;
		return $this;
	}

	public function getBtstoptimeout()
	{
		return $this->btstoptimeout;
	}

	public function setBtstoptimeout($btstoptimeout)
	{
		$this->btstoptimeout = $btstoptimeout;
		return $this;
	}

	public function getBttracker()
	{
		return $this->bttracker;
	}

	public function setBttracker($bttracker)
	{
		$this->bttracker = $bttracker;
		return $this;
	}

	public function getBttrackerconnecttimeout()
	{
		return $this->bttrackerconnecttimeout;
	}

	public function setBttrackerconnecttimeout($bttrackerconnecttimeout)
	{
		$this->bttrackerconnecttimeout = $bttrackerconnecttimeout;
		return $this;
	}

	public function getBttrackerinterval()
	{
		return $this->bttrackerinterval;
	}

	public function setBttrackerinterval($bttrackerinterval)
	{
		$this->bttrackerinterval = $bttrackerinterval;
		return $this;
	}

	public function getBttrackertimeout()
	{
		return $this->bttrackertimeout;
	}

	public function setBttrackertimeout($bttrackertimeout)
	{
		$this->bttrackertimeout = $bttrackertimeout;
		return $this;
	}

	public function getCheckintegrity()
	{
		return $this->checkintegrity;
	}

	public function setCheckintegrity($checkintegrity)
	{
		$this->checkintegrity = $checkintegrity;
		return $this;
	}

	public function getChecksum()
	{
		return $this->checksum;
	}

	public function setChecksum($checksum)
	{
		$this->checksum = $checksum;
		return $this;
	}

	public function getConditionalget()
	{
		return $this->conditionalget;
	}

	public function setConditionalget($conditionalget)
	{
		$this->conditionalget = $conditionalget;
		return $this;
	}

	public function getConnecttimeout()
	{
		return $this->connecttimeout;
	}

	public function setConnecttimeout($connecttimeout)
	{
		$this->connecttimeout = $connecttimeout;
		return $this;
	}

	public function getContentdispositiondefaultutf8()
	{
		return $this->contentdispositiondefaultutf8;
	}

	public function setContentdispositiondefaultutf8($contentdispositiondefaultutf8)
	{
		$this->contentdispositiondefaultutf8 = $contentdispositiondefaultutf8;
		return $this;
	}

	public function getContinue()
	{
		return $this->continue;
	}

	public function setContinue($continue)
	{
		$this->continue = $continue;
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

	public function getDryrun()
	{
		return $this->dryrun;
	}

	public function setDryrun($dryrun)
	{
		$this->dryrun = $dryrun;
		return $this;
	}

	public function getEnablehttpkeepalive()
	{
		return $this->enablehttpkeepalive;
	}

	public function setEnablehttpkeepalive($enablehttpkeepalive)
	{
		$this->enablehttpkeepalive = $enablehttpkeepalive;
		return $this;
	}

	public function getEnablehttppipelining()
	{
		return $this->enablehttppipelining;
	}

	public function setEnablehttppipelining($enablehttppipelining)
	{
		$this->enablehttppipelining = $enablehttppipelining;
		return $this;
	}

	public function getEnablemmap()
	{
		return $this->enablemmap;
	}

	public function setEnablemmap($enablemmap)
	{
		$this->enablemmap = $enablemmap;
		return $this;
	}

	public function getEnablepeerexchange()
	{
		return $this->enablepeerexchange;
	}

	public function setEnablepeerexchange($enablepeerexchange)
	{
		$this->enablepeerexchange = $enablepeerexchange;
		return $this;
	}

	public function getFileallocation()
	{
		return $this->fileallocation;
	}

	public function setFileallocation($fileallocation)
	{
		$this->fileallocation = $fileallocation;
		return $this;
	}

	public function getFollowmetalink()
	{
		return $this->followmetalink;
	}

	public function setFollowmetalink($followmetalink)
	{
		$this->followmetalink = $followmetalink;
		return $this;
	}

	public function getFollowtorrent()
	{
		return $this->followtorrent;
	}

	public function setFollowtorrent($followtorrent)
	{
		$this->followtorrent = $followtorrent;
		return $this;
	}

	public function getForcesave()
	{
		return $this->forcesave;
	}

	public function setForcesave($forcesave)
	{
		$this->forcesave = $forcesave;
		return $this;
	}

	public function getFtppasswd()
	{
		return $this->ftppasswd;
	}

	public function setFtppasswd($ftppasswd)
	{
		$this->ftppasswd = $ftppasswd;
		return $this;
	}

	public function getFtppasv()
	{
		return $this->ftppasv;
	}

	public function setFtppasv($ftppasv)
	{
		$this->ftppasv = $ftppasv;
		return $this;
	}

	public function getFtpproxy()
	{
		return $this->ftpproxy;
	}

	public function setFtpproxy($ftpproxy)
	{
		$this->ftpproxy = $ftpproxy;
		return $this;
	}

	public function getFtpproxypasswd()
	{
		return $this->ftpproxypasswd;
	}

	public function setFtpproxypasswd($ftpproxypasswd)
	{
		$this->ftpproxypasswd = $ftpproxypasswd;
		return $this;
	}

	public function getFtpproxyuser()
	{
		return $this->ftpproxyuser;
	}

	public function setFtpproxyuser($ftpproxyuser)
	{
		$this->ftpproxyuser = $ftpproxyuser;
		return $this;
	}

	public function getFtpreuseconnection()
	{
		return $this->ftpreuseconnection;
	}

	public function setFtpreuseconnection($ftpreuseconnection)
	{
		$this->ftpreuseconnection = $ftpreuseconnection;
		return $this;
	}

	public function getFtptype()
	{
		return $this->ftptype;
	}

	public function setFtptype($ftptype)
	{
		$this->ftptype = $ftptype;
		return $this;
	}

	public function getFtpuser()
	{
		return $this->ftpuser;
	}

	public function setFtpuser($ftpuser)
	{
		$this->ftpuser = $ftpuser;
		return $this;
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

	public function getHashcheckonly()
	{
		return $this->hashcheckonly;
	}

	public function setHashcheckonly($hashcheckonly)
	{
		$this->hashcheckonly = $hashcheckonly;
		return $this;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setHeader($header)
	{
		$this->header = $header;
		return $this;
	}

	public function getHttpacceptgzip()
	{
		return $this->httpacceptgzip;
	}

	public function setHttpacceptgzip($httpacceptgzip)
	{
		$this->httpacceptgzip = $httpacceptgzip;
		return $this;
	}

	public function getHttpauthchallenge()
	{
		return $this->httpauthchallenge;
	}

	public function setHttpauthchallenge($httpauthchallenge)
	{
		$this->httpauthchallenge = $httpauthchallenge;
		return $this;
	}

	public function getHttpnocache()
	{
		return $this->httpnocache;
	}

	public function setHttpnocache($httpnocache)
	{
		$this->httpnocache = $httpnocache;
		return $this;
	}

	public function getHttppasswd()
	{
		return $this->httppasswd;
	}

	public function setHttppasswd($httppasswd)
	{
		$this->httppasswd = $httppasswd;
		return $this;
	}

	public function getHttpproxy()
	{
		return $this->httpproxy;
	}

	public function setHttpproxy($httpproxy)
	{
		$this->httpproxy = $httpproxy;
		return $this;
	}

	public function getHttpproxypasswd()
	{
		return $this->httpproxypasswd;
	}

	public function setHttpproxypasswd($httpproxypasswd)
	{
		$this->httpproxypasswd = $httpproxypasswd;
		return $this;
	}

	public function getHttpproxyuser()
	{
		return $this->httpproxyuser;
	}

	public function setHttpproxyuser($httpproxyuser)
	{
		$this->httpproxyuser = $httpproxyuser;
		return $this;
	}

	public function getHttpuser()
	{
		return $this->httpuser;
	}

	public function setHttpuser($httpuser)
	{
		$this->httpuser = $httpuser;
		return $this;
	}

	public function getHttpsproxy()
	{
		return $this->httpsproxy;
	}

	public function setHttpsproxy($httpsproxy)
	{
		$this->httpsproxy = $httpsproxy;
		return $this;
	}

	public function getHttpsproxypasswd()
	{
		return $this->httpsproxypasswd;
	}

	public function setHttpsproxypasswd($httpsproxypasswd)
	{
		$this->httpsproxypasswd = $httpsproxypasswd;
		return $this;
	}

	public function getHttpsproxyuser()
	{
		return $this->httpsproxyuser;
	}

	public function setHttpsproxyuser($httpsproxyuser)
	{
		$this->httpsproxyuser = $httpsproxyuser;
		return $this;
	}

	public function getIndexout()
	{
		return $this->indexout;
	}

	public function setIndexout($indexout)
	{
		$this->indexout = $indexout;
		return $this;
	}

	public function getLowestspeedlimit()
	{
		return $this->lowestspeedlimit;
	}

	public function setLowestspeedlimit($lowestspeedlimit)
	{
		$this->lowestspeedlimit = $lowestspeedlimit;
		return $this;
	}

	public function getMaxconnectionperserver()
	{
		return $this->maxconnectionperserver;
	}

	public function setMaxconnectionperserver($maxconnectionperserver)
	{
		$this->maxconnectionperserver = $maxconnectionperserver;
		return $this;
	}

	public function getMaxdownloadlimit()
	{
		return $this->maxdownloadlimit;
	}

	public function setMaxdownloadlimit($maxdownloadlimit)
	{
		$this->maxdownloadlimit = $maxdownloadlimit;
		return $this;
	}

	public function getMaxfilenotfound()
	{
		return $this->maxfilenotfound;
	}

	public function setMaxfilenotfound($maxfilenotfound)
	{
		$this->maxfilenotfound = $maxfilenotfound;
		return $this;
	}

	public function getMaxmmaplimit()
	{
		return $this->maxmmaplimit;
	}

	public function setMaxmmaplimit($maxmmaplimit)
	{
		$this->maxmmaplimit = $maxmmaplimit;
		return $this;
	}

	public function getMaxresumefailuretries()
	{
		return $this->maxresumefailuretries;
	}

	public function setMaxresumefailuretries($maxresumefailuretries)
	{
		$this->maxresumefailuretries = $maxresumefailuretries;
		return $this;
	}

	public function getMaxtries()
	{
		return $this->maxtries;
	}

	public function setMaxtries($maxtries)
	{
		$this->maxtries = $maxtries;
		return $this;
	}

	public function getMaxuploadlimit()
	{
		return $this->maxuploadlimit;
	}

	public function setMaxuploadlimit($maxuploadlimit)
	{
		$this->maxuploadlimit = $maxuploadlimit;
		return $this;
	}

	public function getMetalinkbaseuri()
	{
		return $this->metalinkbaseuri;
	}

	public function setMetalinkbaseuri($metalinkbaseuri)
	{
		$this->metalinkbaseuri = $metalinkbaseuri;
		return $this;
	}

	public function getMetalinkenableuniqueprotocol()
	{
		return $this->metalinkenableuniqueprotocol;
	}

	public function setMetalinkenableuniqueprotocol($metalinkenableuniqueprotocol)
	{
		$this->metalinkenableuniqueprotocol = $metalinkenableuniqueprotocol;
		return $this;
	}

	public function getMetalinklanguage()
	{
		return $this->metalinklanguage;
	}

	public function setMetalinklanguage($metalinklanguage)
	{
		$this->metalinklanguage = $metalinklanguage;
		return $this;
	}

	public function getMetalinklocation()
	{
		return $this->metalinklocation;
	}

	public function setMetalinklocation($metalinklocation)
	{
		$this->metalinklocation = $metalinklocation;
		return $this;
	}

	public function getMetalinkos()
	{
		return $this->metalinkos;
	}

	public function setMetalinkos($metalinkos)
	{
		$this->metalinkos = $metalinkos;
		return $this;
	}

	public function getMetalinkpreferredprotocol()
	{
		return $this->metalinkpreferredprotocol;
	}

	public function setMetalinkpreferredprotocol($metalinkpreferredprotocol)
	{
		$this->metalinkpreferredprotocol = $metalinkpreferredprotocol;
		return $this;
	}

	public function getMetalinkversion()
	{
		return $this->metalinkversion;
	}

	public function setMetalinkversion($metalinkversion)
	{
		$this->metalinkversion = $metalinkversion;
		return $this;
	}

	public function getMinsplitsize()
	{
		return $this->minsplitsize;
	}

	public function setMinsplitsize($minsplitsize)
	{
		$this->minsplitsize = $minsplitsize;
		return $this;
	}

	public function getNofileallocationlimit()
	{
		return $this->nofileallocationlimit;
	}

	public function setNofileallocationlimit($nofileallocationlimit)
	{
		$this->nofileallocationlimit = $nofileallocationlimit;
		return $this;
	}

	public function getNonetrc()
	{
		return $this->nonetrc;
	}

	public function setNonetrc($nonetrc)
	{
		$this->nonetrc = $nonetrc;
		return $this;
	}

	public function getNoproxy()
	{
		return $this->noproxy;
	}

	public function setNoproxy($noproxy)
	{
		$this->noproxy = $noproxy;
		return $this;
	}

	public function getOut()
	{
		return $this->out;
	}

	public function setOut($out)
	{
		$this->out = $out;
		return $this;
	}

	public function getParameterizeduri()
	{
		return $this->parameterizeduri;
	}

	public function setParameterizeduri($parameterizeduri)
	{
		$this->parameterizeduri = $parameterizeduri;
		return $this;
	}

	public function getPause()
	{
		return $this->pause;
	}

	public function setPause($pause)
	{
		$this->pause = $pause;
		return $this;
	}

	public function getPausemetadata()
	{
		return $this->pausemetadata;
	}

	public function setPausemetadata($pausemetadata)
	{
		$this->pausemetadata = $pausemetadata;
		return $this;
	}

	public function getPiecelength()
	{
		return $this->piecelength;
	}

	public function setPiecelength($piecelength)
	{
		$this->piecelength = $piecelength;
		return $this;
	}

	public function getProxymethod()
	{
		return $this->proxymethod;
	}

	public function setProxymethod($proxymethod)
	{
		$this->proxymethod = $proxymethod;
		return $this;
	}

	public function getRealtimechunkchecksum()
	{
		return $this->realtimechunkchecksum;
	}

	public function setRealtimechunkchecksum($realtimechunkchecksum)
	{
		$this->realtimechunkchecksum = $realtimechunkchecksum;
		return $this;
	}

	public function getReferer()
	{
		return $this->referer;
	}

	public function setReferer($referer)
	{
		$this->referer = $referer;
		return $this;
	}

	public function getRemotetime()
	{
		return $this->remotetime;
	}

	public function setRemotetime($remotetime)
	{
		$this->remotetime = $remotetime;
		return $this;
	}

	public function getRemovecontrolfile()
	{
		return $this->removecontrolfile;
	}

	public function setRemovecontrolfile($removecontrolfile)
	{
		$this->removecontrolfile = $removecontrolfile;
		return $this;
	}

	public function getRetrywait()
	{
		return $this->retrywait;
	}

	public function setRetrywait($retrywait)
	{
		$this->retrywait = $retrywait;
		return $this;
	}

	public function getReuseuri()
	{
		return $this->reuseuri;
	}

	public function setReuseuri($reuseuri)
	{
		$this->reuseuri = $reuseuri;
		return $this;
	}

	public function getRpcsaveuploadmetadata()
	{
		return $this->rpcsaveuploadmetadata;
	}

	public function setRpcsaveuploadmetadata($rpcsaveuploadmetadata)
	{
		$this->rpcsaveuploadmetadata = $rpcsaveuploadmetadata;
		return $this;
	}

	public function getSeedratio()
	{
		return $this->seedratio;
	}

	public function setSeedratio($seedratio)
	{
		$this->seedratio = $seedratio;
		return $this;
	}

	public function getSeedtime()
	{
		return $this->seedtime;
	}

	public function setSeedtime($seedtime)
	{
		$this->seedtime = $seedtime;
		return $this;
	}

	public function getSelectfile()
	{
		return $this->selectfile;
	}

	public function setSelectfile($selectfile)
	{
		$this->selectfile = $selectfile;
		return $this;
	}

	public function getSplit()
	{
		return $this->split;
	}

	public function setSplit($split)
	{
		$this->split = $split;
		return $this;
	}

	public function getSshhostkeymd()
	{
		return $this->sshhostkeymd;
	}

	public function setSshhostkeymd($sshhostkeymd)
	{
		$this->sshhostkeymd = $sshhostkeymd;
		return $this;
	}

	public function getStreampieceselector()
	{
		return $this->streampieceselector;
	}

	public function setStreampieceselector($streampieceselector)
	{
		$this->streampieceselector = $streampieceselector;
		return $this;
	}

	public function getTimeout()
	{
		return $this->timeout;
	}

	public function setTimeout($timeout)
	{
		$this->timeout = $timeout;
		return $this;
	}

	public function getUriselector()
	{
		return $this->uriselector;
	}

	public function setUriselector($uriselector)
	{
		$this->uriselector = $uriselector;
		return $this;
	}

	public function getUsehead()
	{
		return $this->usehead;
	}

	public function setUsehead($usehead)
	{
		$this->usehead = $usehead;
		return $this;
	}

	public function getUseragent()
	{
		return $this->useragent;
	}

	public function setUseragent($useragent)
	{
		$this->useragent = $useragent;
		return $this;
	}
	
	
	
}