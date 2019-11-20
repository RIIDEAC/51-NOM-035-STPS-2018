<?php
namespace app\controllers;

class Descargar
{
	private $_view,
			$_resultadosFRPS;

	public function __construct
	(
		\app\core\ViewToken $View,
		\app\models\nom035\ResultadosFRPS $ResultadosFRPS,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail,
		\app\models\archivos\CrearTXT $CrearTXT
	)
	{
		$this->_view = $View;
		$this->_resultadosFRPS = $ResultadosFRPS;
		$this->_usuario = $GetUsuByEmail;
		$this->_crearTxT = $CrearTXT;
		
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		
		if($this->_resultadosFRPS->getData($this->_usuario->getData()->USU_ID))
		{
			if($resultados = $this->_resultadosFRPS->ResultadosTotales())
			{
				//PASAR A UN ARCHIVO DE TEXTO Y MOSTRAR ENLACE PARA SU DESCARGA
				$this->_crearTxT->crear($resultados, 'app/data/frps_trabajador_'.$this->_usuario->getData()->USU_ID.'.txt');

				if(file_exists('app/data/frps_trabajador_'.$this->_usuario->getData()->USU_ID.'.txt'))
				{
					$this->_view->show('template/Descarga', 'app/data/frps_trabajador_'.$this->_usuario->getData()->USU_ID.'.txt');		
				}
			}
			else
			{
				$this->_view->show('template/NoRegistros');
			}
		}
		else
		{
			$this->_view->show('template/NoRegistros');
		}
		
		
		
						
		$this->_view->show('template/footer');
	}
}