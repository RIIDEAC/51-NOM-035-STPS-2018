<?php
namespace app\controllers;

class RegistrarFRPSIII
{
	private		$_token,
				$_redirect,
				$_frps,
				$_fields = array(
					'USU_ID' => array('unique' => 'DAT_FRPSIII_FRPSIII'),
					'token' => array('validtoken' => true),
				    'FRPSIII' => array( 'minlenght' => 1, 'numeric' => true ),
				    'RPS_L_69' => array( 'minlenght' => 1, 'numeric' => true ),
				    'RPS_L_70' => array( 'minlenght' => 1, 'numeric' => true ),
				    'RPS_L_71' => array( 'minlenght' => 1, 'numeric' => true ),
				    'RPS_L_72' => array( 'minlenght' => 1, 'numeric' => true )
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\nom035\InsertarFRPSIII $InsertarFRPSIII,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_frps = $InsertarFRPSIII;
		$this->_usu = $GetUsuByEmail;
	}

	public function index()
	{
		//La validacion hace la revision de password

		$_POST['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;

		if(!$this->_validate->check($_POST, $this->_fields)->fails())
		{
			if($this->_frps->insertar($_POST))
			{
				$this->_redirect->to('RegistroRealizado');			
			}
			else
			{
				$_SESSION['error'] = "Error desconocido";
				$this->_redirect->to('RegistroNoRealizado');
			}
		}
		else
		{
		    $_SESSION['error'] = $this->_validate->errors()->all();
			$this->_redirect->to('RegistroNoRealizado');
						
		}

	}
}