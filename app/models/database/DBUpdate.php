<?php
namespace app\models\database;
use app\interfaces\DBMethodInterface;

class DBUpdate implements DBMethodInterface
{
	public function __construct()
	{

	}

	public function do($table, $where = array(), $options = array())
	{
		
	}
}