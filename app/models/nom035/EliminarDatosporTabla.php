<?php
namespace app\models\nom035;
/**
 * 
 */
class EliminarDatosporTabla
{
	private $_db,
			$_usu;
	
	public function __construct
	(
		\app\models\database\DBDelete $DBDelete,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_db = $DBDelete;
		$this->_usu = $GetUsuByEmail;
	}

	public function eliminar($tables = array())
	{
		$usu_id = $this->_usu->getData($_SESSION['email'])->USU_ID;
		
		foreach ($tables as $table)
		{
			if($this->_db->delete(
				array(
				'table' => $table, 
				'where' => array('USU_ID','=',$usu_id)
				)
			))
			{
				$res = true;
			}
		}

		if($res)
		{
			return true;
		}		

		return false;
	}
}
