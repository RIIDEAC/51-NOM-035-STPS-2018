<?php
namespace app\models\database;
use pdo;

class DBResultObj
{
	public function getObj($query = null)
	{
		return $query->fetchAll(PDO::FETCH_OBJ);
	}
}