<?php
namespace app\models\database;
use pdo;

class DBResultFirst
{
	public function getFirstObj($query = null)
	{
		return $query->fetch(PDO::FETCH_OBJ);
	}
}