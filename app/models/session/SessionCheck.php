<?php
namespace app\models\session;

class SessionCheck
{
	private	$_config;

	public function __construct(\app\core\Config $config)
	{
		$this->_config = $config;
	}

	public function check()
	{
		if(isset($_SESSION['id_session']) && !empty($_SESSION['id_session']) && isset($_SESSION['email']) && !empty($_SESSION['email']))
		{
			$time = time() - $_SESSION['id_session'];
			
			if($time < $this->_config->get('sesion/regular'))
			{
				$_SESSION['id_session'] = time();

				return true;
			}
			else
			{
				unset($_SESSION['id_session']);
				session_destroy();
			}
		}


		return false;
		
	}
}