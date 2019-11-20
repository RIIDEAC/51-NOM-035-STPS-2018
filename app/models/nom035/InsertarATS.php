<?php
namespace app\models\nom035;
/**
 * 
 */
class InsertarATS
{
	private $_db,
			$_usu;
	
	public function __construct
	(
		\app\models\database\DBInsert $DBInsert,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_db = $DBInsert;
		$this->_usu = $GetUsuByEmail;
	}

	public function insertar($data = array())
	{
		unset($data['token']);
		
		$data['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;

		if($this->_db->insert('DAT_ATS_ATS', $data))
		{
			return true;
		}

		return false;
	}
}
