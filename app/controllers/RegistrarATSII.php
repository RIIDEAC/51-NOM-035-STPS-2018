<?php
namespace app\controllers;

class RegistrarATSII
{
	private		$_token,
				$_redirect,
				$_ats,
				$_fields = array(
					'USU_ID' => array( 'unique' => 'DAT_ATSII_ATSII'),
					'ATS_RECUERDOS' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_SUENOS' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_SENTIMIENTOS' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_ACTIVIDADES' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_DIFICULTAD' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_INTERES' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_ALEJADO' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_EXPRESAR' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_IMPRESION' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_DORMIR' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_IRRITABLE' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_CONCENTRARSE' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_NERVIOSO' => array( 'minlenght' => 1, 'numeric' => true ), 
					'ATS_SOBRESALTO' => array( 'minlenght' => 1, 'numeric' => true ), 					
					'token' => array('validtoken' => true)
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail,
		\app\models\nom035\InsertarATSII $InsertarATSII
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_usu = $GetUsuByEmail;
		$this->_ats = $InsertarATSII;
	}

	public function index()
	{
		//La validacion hace la revision de password

		$_POST['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;

		if(!$this->_validate->check($_POST, $this->_fields)->fails())
		{

			if($this->_ats->insertar($_POST))
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