<?php
namespace AppBundle\Dao;
use AppBundle\Model\Aria;
use AppBundle\Dao\BaseDao;

class AriaDaoImpl extends BaseDao
{
	/**
	 * Return all downloads in database
	 * @param Aria $aria
	 * @return boolean
	 */
	public function getDownloadList(Aria $aria) {
		$query = $this->connection()
		->select('id, gid')
		->from('downloads');
		
		$result = $this->doSelectFromQueryBuilder($query);
		dump($result);
		if($result !== null) {
			$downloadList = array();
			foreach ($result as $row) {
				dump($row);
				$aria	->setId($row->id)
						->setGid($row->gid);
				array_push($downloadList, $aria);
			}
			return $result;
		}
		return false;
	}
	
	/**
	 * 
	 * @param String $gid
	 */
	public function addDownload(Aria $aria) {
		$result = false;
		
		if ($aria !== null) {
			$sql = "INSERT INTO downloads(gid) VALUES ('".$aria->getGid()."')";
			$result = $this->insertData($sql);
			dump($result);
		}
		
		if ($result) {
			return $result;
		}
		
		return false;
	}
	
	/**
	 * 
	 * @return \Doctrine\DBAL\Query\QueryBuilder
	 */
	private function connection() {
		return $this->getConnection()->createQueryBuilder();
	}
}