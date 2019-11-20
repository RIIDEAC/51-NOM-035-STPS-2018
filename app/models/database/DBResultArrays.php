<?php
namespace app\models\database;
use pdo;

class DBResultArrays implements DBMethodInterface
{
	public function do($query = null)
	{
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}