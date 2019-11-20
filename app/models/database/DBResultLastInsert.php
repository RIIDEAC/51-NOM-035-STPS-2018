<?php
namespace app\models\database;
use pdo;

class DBResultLastInsert
{
	public function getLastId($query)
	{
		return $query->lastInsertId();
	}
}