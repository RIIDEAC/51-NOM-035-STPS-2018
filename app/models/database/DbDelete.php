<?php
namespace app\models\database;
/*
	PARA IMPLEMENTAR
		array(
			'table' => '', 
			'where' => array('','','')
			)
	*/
class DBDelete 
{
	private $_db;

	public function __construct(\app\models\database\DB $DB)
	{
		$this->_db = $DB;
	}

	public function delete($where = array())
	{
		if($where)
		{
			$this->_where = $where;
			$this->_table = $this->_where['table'];

			$this->_bcampo = $this->_where['where'][0];
			$signo = $this->_where['where'][1];
			$this->_bvalor = $this->_where['where'][2];

			$this->_donde = 'WHERE '. $this->_bcampo. ' '. $signo. ' ?';
			
			return $this->_db->query
			(
				array
				(
					'sql' => "DELETE FROM $this->_table $this->_donde",
					'values' => array($this->_bcampo => $this->_bvalor)
				)
			);
		}

		return false;
	}
}