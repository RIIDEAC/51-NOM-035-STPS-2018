<?php
namespace app\controllers;

class RegistroNoRealizado
{
	private $_view;

	public function __construct(\app\core\ViewToken $View, \app\models\redirect\Redirect $Redirect)
	{
		if(empty($_SESSION['error']))
		{
			$Redirect->to('inicio');
		}
		$this->_view = $View;
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		$this->_view->show('template/RegistroNoRealizado', $_SESSION['error']);
		$this->_view->show('template/footer');
	}
}