<?php
namespace app\models\nom035;
/**
 * 	
 */
class AvancesUsuarios
{
	private $_db,
			$_dbResObj,
			$_dbResCount,
			$_tablas = array(
				'DAT_TRABAJADOR_TRA' => 'Datos del trabajador',
				'DAT_ATS_ATS' => 'Cuestionario 1 de eventos traumaticos severos', 
				'DAT_ATSII_ATSII' => 'Cuestionario 2 de eventos traumaticos severos', 
				'DAT_FRPS_FRPS' => 'Cuestionario 1 de factores de riesgo psicosocial', 
				'DAT_FRPSII_FRPSII' => 'Cuestionario 2 de factores de riesgo psicosocial', 
				'DAT_FRPSIII_FRPSIII' => 'Cuestionario 3 de factores de riesgo psicosocial'
			);
	
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

	public function getData($_id = null)
	{

		if(!$_id)
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
					'USU_ID'
					)
			);
		}
		else
		{
			$datos = $this->_db->get(
				array(
					'table' => 'DAT_USUARIO_USU', 
					//'limit' =>  1, 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array('USU_ID','=', $_id),
					//'and' => array('', '', '')
					), 
				array(
					'USU_ID'
					)
			);
		}
		

		if($this->_dbResCount->getCount($datos) !== 0)
		{
			$usuarios = $this->_dbResObj->getObj($datos);

			$resultados = array();

			foreach ($usuarios as $key => $value)
			{
				foreach ($this->_tablas as $k => $table)
				{
					$data = $this->_db->get(
						array(
							'table' => $k, 
							//'limit' =>  1, 
							//'orderby' => '', 
							//'order' => '', 
							'where' => array('USU_ID','=', $value->USU_ID),
							//'and' => array('', '', '')
							), 
						array(
							'USU_ID'
							)
					);

					if($this->_dbResCount->getCount($data) !== 0)
					{
						$resultados[$value->USU_ID][$table] = 'Completado';
					}
					else
					{
						$resultados[$value->USU_ID][$table] = 'No completado';
					}
				}
			}

			return $resultados;
		}
		
		return false; 
	}
}