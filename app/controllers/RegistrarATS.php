<?php
namespace app\controllers;

class RegistrarATS
{
	private		$_token,
				$_redirect,
				$_ats,
				$_atsII,
				$_fields = array(
					'USU_ID' => array( 'unique' => 'DAT_ATS_ATS'),
					'ATS_ACCIDENTE' => array( 'minlenght' => 1 ), 
					'ATS_ASALTO' => array( 'minlenght' => 1 ), 
					'ATS_VIOLENCIA' => array( 'minlenght' => 1 ), 
					'ATS_SECUESTRO' => array( 'minlenght' => 1 ), 
					'ATS_AMENAZAS' => array( 'minlenght' => 1 ), 
					'ATS_OTRO' => array( 'minlenght' => 1 ), 
					'token' => array('validtoken' => true),
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail,
		\app\models\nom035\InsertarATS $InsertarATS,
		\app\models\nom035\InsertarATSII $InsertarATSII
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_usu = $GetUsuByEmail;
		$this->_ats = $InsertarATS;
		$this->_atsII = $InsertarATSII;
	}

	public function index()
	{
		//La validacion hace la revision de password

		$_POST['USU_ID'] = $this->_usu->getData($_SESSION['email'])->USU_ID;

		if(!$this->_validate->check($_POST, $this->_fields)->fails())
		{			
			if($this->_ats->insertar($_POST))
			{
				//Comprobar si se necesita seguir con la prueba
					$ContinuarconPrueba = 
					array
					(
						'ATS_ACCIDENTE',
						'ATS_ASALTO',
						'ATS_VIOLENCIA', 
						'ATS_SECUESTRO' , 
						'ATS_AMENAZAS', 
						'ATS_OTRO'
					);

				foreach ($_POST as $key => $value)
				{
					foreach ($ContinuarconPrueba as $v)
					{
						//Si alguna respuesta fue SÍ (1) entonces se debe seguir con los siguientes cuestionarios
						if($key == $v && $value == 1)
						{
							$this->_redirect->to('CapturarATSII');
						}
					}
				}

				//registrar la otra prueba automaticamente con valores negativos
				$atsII = array(
					'USU_ID' => $_POST['USU_ID'],
					'ATS_RECUERDOS' => 2, 
					'ATS_SUENOS' => 2, 
					'ATS_SENTIMIENTOS' => 2, 
					'ATS_ACTIVIDADES' => 2, 
					'ATS_DIFICULTAD' => 2, 
					'ATS_INTERES' => 2, 
					'ATS_ALEJADO' => 2, 
					'ATS_EXPRESAR' => 2, 
					'ATS_IMPRESION' => 2, 
					'ATS_DORMIR' => 2, 
					'ATS_IRRITABLE' => 2, 
					'ATS_CONCENTRARSE' => 2, 
					'ATS_NERVIOSO' => 2, 
					'ATS_SOBRESALTO' => 2,
				);

				if($this->_atsII->insertar($atsII))
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