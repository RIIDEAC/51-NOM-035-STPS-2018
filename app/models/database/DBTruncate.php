<?php
namespace app\models\database;

/**
 * 
 */
class DBTruncate
{
	private $_db;
	
	public function __construct(\app\models\database\DB $DB)
	{
		$this->_db = $DB;
	}

	public function vaciar($table = array())
	{
		if($table)
		{
			foreach ($table as $value)
			{
				$this->_db->query(
					array(
						'sql' => "TRUNCATE TABLE {$value}"
					)
				);
			}

			return true;
		}

		return false;
	}
}