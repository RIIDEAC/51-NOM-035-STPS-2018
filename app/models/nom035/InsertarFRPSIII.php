<?php
namespace app\models\nom035;
/**
 * 
 */
class InsertarFRPSIII
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

	public function insertar($data)
	{
		unset($data['token']);
		
		$data['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;

		if($this->_db->insert('DAT_FRPSIII_FRPSIII', $data))
		{
			return true;
		}

		return false;
	}
}
