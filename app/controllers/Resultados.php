<?php
namespace app\controllers;

class Resultados
{
	private $_view,
			$_resultadosFRPS;

	public function __construct
	(
		\app\core\ViewToken $View,
		\app\models\nom035\ResultadosFRPS $ResultadosFRPS,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_view = $View;
		$this->_resultadosFRPS = $ResultadosFRPS;
		$this->_usuario = $GetUsuByEmail;
		
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		
		if($this->_resultadosFRPS->getData($this->_usuario->getData()->USU_ID))
		{
			if($resultados = $this->_resultadosFRPS->ResultadosTotales())
			{
				$this->_view->show('template/ResultadosFRPS', $resultados);	
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