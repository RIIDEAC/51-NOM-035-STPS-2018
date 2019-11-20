<?php
namespace app\models\nom035;
/**
 * 
 */
class ResultadosATS
{
	private $_db,
			$_dbResObj,
			$_dbResCount;

	public function __construct
	(
		\app\models\database\DBGet $DBGet
		\app\models\database\DBResultFirst $DBResultFirst,
		\app\models\database\DBResultCount $DBResultCount
	)
	{
		$this->_db = $DBGet;
		$this->_dbResObj = $DBResultFirst;
		$this->_dbResCount = $DBResultCount;
	}

	public function getData($id = null)
	{
		$datos = $this->_db->get(
			array(
				'table' => 'DAT_ATS_ATS', 
				'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('USU_ID','=', $id),
				//'and' => array('', '', '')
				), 
			array(
				'*'
				)
		);

		if($this->_dbResCount->getCount($datos) !== 0)
		{
			$ats = $this->_dbResObj->getFirstObj($datos);

			foreach ($ats as $key => $value)
			{
				foreach ($campos as $k)
				{
					if($key == $k && $value == 1)
					{
						//Si respondio que si a algun reactivo comprobamos en los siguientes cuestionarios

						$dat = $this->_db->get(
							array(
								'table' => 'DAT_ATSII_ATSII', 
								'limit' =>  1, 
								//'orderby' => '', 
								//'order' => '', 
								'where' => array('USU_ID','=', $id),
								//'and' => array('', '', '')
								), 
							array(
								'*'
								)
						);

						if($this->_dbResCount->getCount($dat) !== 0)
						{
							//Comprobamos si existe respuesta positiva que necesite valoración

							return 'Necesita Valoración';
						}
					}
				}
			}
		}

		return false; 
	}


}