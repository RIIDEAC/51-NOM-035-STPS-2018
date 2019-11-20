<?php
namespace app\controllers;

class RegistrarTrabajador
{
	private		$_token,
				$_trabajador,
				$_redirect,
				$_usu,
				$_fields = array(
					'USU_ID' => array(
						'unique' => 'DAT_TRABAJADOR_TRA'
					),
					'TRA_SEXO' => array(
						'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
					),
				    'TRA_EDAD' => array(
				    	'numeric' => true,
						'minlenght' => 2,
						'maxlenght' => 2
				    ),
				    'TRA_CIVIL' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_ESTUDIOS' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_OPP' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_DSA' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_TIPO_PUESTO' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_TIPO_CONTRATACION' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_TIPO_PERSONAL' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_TIPO_JORNADA' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_ROTACION' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_TIEMPO_PUESTO' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'TRA_EXPERIENCIA_LABORAL' => array(
				    	'numeric' => true,
						'minlenght' => 1,
						'maxlenght' => 1
				    ),
				    'token' => array(
				    	'validtoken' => true
				    )
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\trabajador\RegistrarTrabajador $RegistrarTrabajador,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_trabajador = $RegistrarTrabajador;
		$this->_usu = $GetUsuByEmail;
	}

	public function index()
	{
		$_POST['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;
		//La validacion hace la revision de password
		if(!$this->_validate->check($_POST, $this->_fields)->fails())
		{
			if($this->_trabajador->registrar($_POST))
			{
				$this->_redirect->to('RegistroRealizado');
			}
			else
			{
				//ERROR EN REGISTRO
				$_SESSION['error'] = array(array('Error'));
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