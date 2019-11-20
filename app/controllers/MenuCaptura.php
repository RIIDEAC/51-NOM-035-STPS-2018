<?php
namespace app\controllers;

class MenuCaptura
{
	private $_view;

	public function __construct(\app\core\ViewToken $View)
	{
		$this->_view = $View;
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/menu');
		$this->_view->show('template/Capturar');
		$this->_view->show('template/footer');
	}
}