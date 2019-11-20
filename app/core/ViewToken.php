<?php
namespace app\core;

class ViewToken
{
	private		$_config,
				$_token;

	public function __construct
	(
		\app\core\Config $config, 
		\app\models\token\TokenGenerate $TokenGenerate
	)
	{
		$this->_config = $config;
		$this->_token = $TokenGenerate;
	}

	public function show($view, $data = array())
	{
		if(file_exists('app/views/' . $view . '.php'))
		{
			require_once 'app/views/' . $view . '.php';
		}
	}
}