<?php
namespace app\controllers;

class Salir
{
	private		$_view,
				$_redirect;

	public function __construct
	(
		\app\core\View $View,
		\app\models\redirect\Redirect $Redirect
	)
	{
		$this->_view = $View;
		$this->_redirect = $Redirect;

		unset($_SESSION['id_session']);
		session_destroy();
	}

	public function index()
	{
		$this->_redirect->to('login');
	}
}