<?php
namespace app\models\usuarios;

/**
 * 	Permite extraer la informacion de un usuario
 */
class GetUsuByEmail 
{
	private $_db,
			$_dbResObj,
			$_dbResCount;
	
	public function __construct
	(
		\app\models\database\DBGet $DBGet,
		\app\models\database\DBResultFirst $DBResultFirst,
		\app\models\database\DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_dbResObj = $DBResultFirst;
		$this->_dbResCount = $DBResultCount;
	}

	public function getData($email = null)
	{
		if(!$email)
		{
			$email = $_SESSION['email'];
		}

		$datos = $this->_db->get(
			array(
				'table' => 'DAT_USUARIO_USU', 
				'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('USU_CORREO','=', $email),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_dbResCount->getCount($datos) !== 0)
		{
			return $this->_dbResObj->getFirstObj($datos);
		}

		return false; 
	}
}