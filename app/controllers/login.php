<?php
namespace app\controllers;

class Login
{
	private $_view;

	public function __construct(\app\core\ViewToken $View)
	{
		$this->_view = $View;
	}

	public function index()
	{
		$this->_view->show('template/header');
		$this->_view->show('template/login');
		$this->_view->show('template/footer');
	}
}