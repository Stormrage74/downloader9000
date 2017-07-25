<?php
namespace AppBundle\Dao;

use AppBundle\Dao\BaseDao;
use AppBundle\Model\WaitingUris;


class WaitingUrisDaoImpl extends BaseDao {
	
	public function getAllUris(){
		$sql = "select id, url, createDate, alterDate from waitinguris";
		$result = $this->doSelectQuery($sql);
		dump($result);
		if($result != null) {
			$array = Array();
			foreach ($result as $row) {
				$pending = new WaitingUris($row["id"]);
				$pending->setUrl($row["url"])
						->setCreateDate($row["createdate"])
						->setAlterDate($row["alterdate"]);
				$array[] = $pending;
			}
			return $array;
		}
		return false;
	}
	
	
	public function addWaitingUri($waitinguris){
		$sql = "insert into waitinguris(url) values ";
		
		if($waitinguris->getUrl() == null){
			return false;
		}
		
		foreach ($waitinguris->getUrl() as $url) {
			$sql .= "( '".$url."' ),";
		}
		
		$sql .= substr($sql, 0, -1);
		dump($sql);
		$result = $this->doSelectQuery($sql);
		
		dump($result);
		if($result != null) {
			return true;
		}
		
		return false;
	}
	
}