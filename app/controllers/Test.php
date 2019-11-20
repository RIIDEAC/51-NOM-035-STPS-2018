<?php
namespace app\controllers;

class Test
{
	private $_view;

	public function __construct
	(
		\app\core\ViewToken $View,
		\app\models\nom035\ResultadosFRPS $ResultadosFRPS
	)
	{
		$this->_view = $View;
		$this->_ambiente = $ResultadosFRPS;
		
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		
		echo '<pre>'; 
		$this->_ambiente->getData(1);


		echo $this->_ambiente->AmbienteTrabajo();
		$this->_view->show('template/footer');
	}
}