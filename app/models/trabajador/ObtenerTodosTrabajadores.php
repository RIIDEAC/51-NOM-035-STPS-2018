<?php
namespace app\models\trabajador;

/**
 * 	Permite extraer la informacion de un usuario
 */
class ObtenerTodosTrabajadores
{
	private $_db,
			$_dbResObj,
			$_dbResCount;
	
	public function __construct
	(
		\app\models\database\DBGet $DBGet,
		\app\models\database\DBResultObj $DBResultObj,
		\app\models\database\DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_dbResObj = $DBResultObj;
		$this->_dbResCount = $DBResultCount;
	}

	public function getData()
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_TRABAJADOR_TRA', 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				//'where' => array('USU_CORREO','=', $email),
				//'and' => array('', '', '')
				), 
			array(
				'TRA_ID','TRA_ID_INTERNO'
				)
		);

		if($this->_dbResCount->getCount($datos) !== 0)
		{
			return $this->_dbResObj->getObj($datos);
		}

		return false; 
	}
}