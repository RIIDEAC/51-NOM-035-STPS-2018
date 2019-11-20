<?php
namespace app\controllers;

class LoginCheck
{
	private		$_token,
				$_redirect,
				$_fields = array(
					'USU_CORREO' => array(
						'exists' => 'DAT_USUARIO_USU'
					),
					'USU_PASS' => array(
						'minlenght' => 6,
						'maxlenght' => 15,
						'verifypass' => 'DAT_USUARIO_USU'
					),
					'token' => array(
						'validtoken' => true
					)
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
	}

	public function index()
	{
		//La validacion hace la revision de password
		if(!$this->_validate->check($_POST, $this->_fields)->fails())
		{
				//Establecemos id de sesion y email y redireccionamos
				if(!empty($_POST['USU_CORREO']))
				{
					$_SESSION['id_session'] = time();
					$_SESSION['email'] = $_POST['USU_CORREO'];
					$this->_redirect->to('inicio');
				}
				else
				{
					$this->_redirect->to('salir');
				}		
		}
		else
		{
		    $this->_redirect->to('inicio');
		    /*
			foreach($this->_validate->errors()->all() as $error)
			{
				foreach($error as $e)
				{
					echo $e;
				}
			}
			*/
						
		}

	}
}