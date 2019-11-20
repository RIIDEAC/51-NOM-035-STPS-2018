<?php
namespace app\controllers;

class Avance
{
	private $_view,
			$_avances,
			$_usuario;

	public function __construct
	(
		\app\core\ViewToken $View, 
		\app\models\nom035\AvancesUsuarios $AvancesUsuarios,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_view = $View;
		$this->_avances = $AvancesUsuarios;
		$this->_usuario = $GetUsuByEmail;
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		$this->_view->show('template/avances', $this->_avances->getData($this->_usuario->getData($_SESSION['email'])->USU_ID));	
		$this->_view->show('template/footer');
	}
}