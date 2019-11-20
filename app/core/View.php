<?php
namespace app\core;

class View
{
	private		$_config;

	public function __construct
	(
		\app\core\Config $config
	)
	{
		$this->_config = $config;
	}

	public function show($view, $data = array())
	{
		if(file_exists('app/views/' . $view . '.php'))
		{
			require_once 'app/views/' . $view . '.php';
		}
	}
}