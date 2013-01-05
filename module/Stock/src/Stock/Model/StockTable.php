<?php
namespace Stock\Model;

use Zend\Db\TableGateway\TableGateway;

class StockTable {
	
	protected $tableGateway;
	
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll() {
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getStock() {
		$id = (int)$id;
		
	}
}