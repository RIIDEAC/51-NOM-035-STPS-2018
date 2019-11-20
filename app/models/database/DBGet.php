<?php
namespace app\models\database;

class DBGet
{
	private $_db,
			$_where,
			$_fields,
			$_table,
			$_limit = null,
			$_orderby = null,
			$_donde = null,
			$_and = null,
			$_bvalor = null,
			$_bavalor = null,
			$_bcampo = null,
			$_bacampo = null;
	/*
	PARA IMPLEMENTAR
		array(
			'table' => '', 
			'limit' => '', 
			'orderby' => '', 
			'order' => '', 
			'where' => array('','',''),
			'and' => array('', '', '')
			), 
		array(
			'*'
			)
	*/		

	public function __construct(\app\models\database\DB $DB)
	{
		$this->_db = $DB;
	}

	public function get($where = array(), $fields = array())
	{
		$this->_where = $where;	
		$this->_fields = $fields;
		$this->_table = $this->_where['table'];

		if(isset($this->_where['limit']))
		{
			$this->_limit = 'LIMIT '. $this->_where['limit'];
		}
		if(isset($this->_where['orderby']) && isset($this->_where['order']))
		{
			$this->_orderby = 'ORDER BY '. $this->_where['orderby']. ' '. $this->_where['order'];
		}
		if(isset($this->_where['where']))
		{			
			$this->_bcampo = $this->_where['where'][0];
			$signo = $this->_where['where'][1];
			$this->_bvalor = $this->_where['where'][2];

			$this->_donde = 'WHERE '. $this->_bcampo. ' '. $signo. ' ?';
		}
		if(isset($this->_where['and']))
		{			
			$this->_bacampo = $this->_where['and'][0];
			$signo = $this->_where['and'][1];
			$this->_bavalor = $this->_where['and'][2];

			$this->_and = 'AND '. $this->_bacampo. ' '. $signo. ' ?';
		}

		$fields = '';

		foreach($this->_fields as $field)
		{
			$fields = $fields.','.$field; 
		}
		
		$this->_fields = substr($fields,1);

		return $this->_db->query
		(
			array
			(
				'sql' => "SELECT $this->_fields FROM $this->_table $this->_donde $this->_and $this->_orderby $this->_limit",
				'values' => array($this->_bcampo => $this->_bvalor)
			)
		);
	}
}