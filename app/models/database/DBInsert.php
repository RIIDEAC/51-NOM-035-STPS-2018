<?php
namespace app\models\database;

class DBInsert 
{
	private $_db;

	public function __construct(\app\models\database\DB $DB)
	{
		$this->_db = $DB;
	}

	public function insert($table, $fields = array())
	{
		if(count($fields))
		{
			$keys = array_keys($fields);
			$values = '';
			$x=1;

			foreach($fields as $field)
			{
				$values.= "?";

				if($x < count($fields))
				{
					$values.= ', ';
				}

				$x++;
			}

			$sql = "INSERT INTO {$table} (`". implode('`, `', $keys) ."`) VALUES ({$values})";

			//REALIZAMOS EL QUERY
			$this->_db->query
			(	array
				(
					'sql' => $sql,
					'values' => $fields
				)
			);

			//SI EL VALOR DE LA ULTIMA ID REGISTRADA NO ES 0 LA DEVUELVE
			if($this->_db->lastId() !== 0)
			{
				return $this->_db->lastId();
			}
		}

		return false;
	}
}