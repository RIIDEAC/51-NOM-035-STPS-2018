<?php
namespace app\models\redirect;

class Redirect
{
	private $_config;

	public function __construct(\app\core\Config $Config)
	{
		$this->_config = $Config;
	}
	public function to($location)
	{
		header('Location: ' . $this->_config->get('app/webbase').$location);
		exit();
	}
}