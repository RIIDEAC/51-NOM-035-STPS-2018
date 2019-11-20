<?php
namespace app\models\usuarios;

/**
 * 	Permite extraer la informacion de un usuario
 */
class GetAllUsu
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
				'table' => 'DAT_USUARIO_USU', 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				//'where' => array('USU_CORREO','=', $email),
				//'and' => array('', '', '')
				), 
			array(
				'USU_ID','USU_CURP','USU_CORREO','USU_TELEFONO','USU_NOMBRE','USU_PATERNO','USU_MATERNO','USU_FEC_ING'
				)
		);

		if($this->_dbResCount->getCount($datos) !== 0)
		{
			return $this->_dbResObj->getObj($datos);
		}

		return false; 
	}
}