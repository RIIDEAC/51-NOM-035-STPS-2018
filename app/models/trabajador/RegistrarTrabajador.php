<?php
namespace app\models\trabajador;
/**
 * 
 */
class RegistrarTrabajador
{
	private $_db;
	
	public function __construct(
		\app\models\database\DBInsert $DBInsert
	)
	{
		$this->_db = $DBInsert;
	}

	public function registrar($data = array())
	{
		if(is_array($data) && !empty($data))
		{
			unset($data['token']);
			
			if($this->_db->insert('DAT_TRABAJADOR_TRA', $data))
			{
				return true;
			}
		}

		return false;
	}
}