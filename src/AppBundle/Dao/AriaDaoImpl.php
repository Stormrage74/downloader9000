<?php

use AppBundle\Model\Aria;

class AriaDaoImpl extends BaseDao 
{
	public function getCustomerList(Aria $aria) {
		$query = $this->getConnection()->createQueryBuilder()
		->select('id')
		->from('');
		
		
		$result = $this->doSelectFromQueryBuilder($query);
		
		return $result;
	}
}