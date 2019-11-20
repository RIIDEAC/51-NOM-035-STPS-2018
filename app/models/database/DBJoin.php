<?php
namespace app\models\database;

class DBJoin
{
	private $_db;

	public function __construct
	(
		\app\models\database\DB $DB
	)
	{
		$this->_db = $DB;
	}

	public function getData($sql,$values)
	{
		return $this->_db->query
		(
			array
			(
				'sql' => $sql,
				'values' => $values
			)
		);

	}
}