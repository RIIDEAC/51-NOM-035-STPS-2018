<?php
namespace app\models\database;
use pdo;

class DBResultCount
{
	public function getCount($query = null)
	{
		return $query->rowCount();
	}
}