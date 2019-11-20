<?php
namespace app\models\database;
use pdo;

class DBCon
{
	private 	$_pdo,
				$_config;

	public function __construct(\app\core\Config $Config)
	{
		$this->_config = $Config;

		try
		{
			$this->_pdo = new PDO('mysql:host=' . $this->_config->get('db/host') .';dbname='. $this->_config->get('db/dbname').';chartset=utf8',$this->_config->get('db/dbuser'), $this->_config->get('db/dbpass'));
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function getCon()
	{
		return $this->_pdo;
	}

}