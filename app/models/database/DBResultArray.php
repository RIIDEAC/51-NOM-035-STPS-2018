<?php
namespace app\models\database;
use app\interfaces\DBMethodInterface;
use pdo;

class DBResultArray implements DBMethodInterface
{
	private $_where;

	public function __construct($where = array(), $options = array())
	{
		$this->_where = $where;
	}

	public function do($query = null)
	{
		return $query->fetch(PDO::FETCH_ASSOC);
	}
}