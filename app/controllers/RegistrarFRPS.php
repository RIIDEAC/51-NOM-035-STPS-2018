<?php
namespace app\controllers;

class RegistrarFRPS
{
	private		$_token,
				$_redirect,
				$_frps,
				$_fields = array(
					'USU_ID' => array('unique' => 'DAT_FRPS_FRPS'),
					'token' => array('validtoken' => true),
				    'RPS_L_1' => array( 'minlenght' => 1 ), 
					'RPS_L_2' => array( 'minlenght' => 1 ), 
					'RPS_L_3' => array( 'minlenght' => 1 ), 
					'RPS_L_4' => array( 'minlenght' => 1 ), 
					'RPS_L_5' => array( 'minlenght' => 1 ), 
					'RPS_L_6' => array( 'minlenght' => 1 ), 
					'RPS_L_7' => array( 'minlenght' => 1 ), 
					'RPS_L_8' => array( 'minlenght' => 1 ), 
					'RPS_L_9' => array( 'minlenght' => 1 ), 
					'RPS_L_10' => array( 'minlenght' => 1 ), 
					'RPS_L_11' => array( 'minlenght' => 1 ), 
					'RPS_L_12' => array( 'minlenght' => 1 ), 
					'RPS_L_13' => array( 'minlenght' => 1 ), 
					'RPS_L_14' => array( 'minlenght' => 1 ), 
					'RPS_L_15' => array( 'minlenght' => 1 ), 
					'RPS_L_16' => array( 'minlenght' => 1 ), 
					'RPS_L_17' => array( 'minlenght' => 1 ), 
					'RPS_L_18' => array( 'minlenght' => 1 ), 
					'RPS_L_19' => array( 'minlenght' => 1 ), 
					'RPS_L_20' => array( 'minlenght' => 1 ), 
					'RPS_L_21' => array( 'minlenght' => 1 ), 
					'RPS_L_22' => array( 'minlenght' => 1 ), 
					'RPS_L_23' => array( 'minlenght' => 1 ), 
					'RPS_L_24' => array( 'minlenght' => 1 ), 
					'RPS_L_25' => array( 'minlenght' => 1 ), 
					'RPS_L_26' => array( 'minlenght' => 1 ), 
					'RPS_L_27' => array( 'minlenght' => 1 ), 
					'RPS_L_28' => array( 'minlenght' => 1 ), 
					'RPS_L_29' => array( 'minlenght' => 1 ), 
					'RPS_L_30' => array( 'minlenght' => 1 ), 
					'RPS_L_31' => array( 'minlenght' => 1 ), 
					'RPS_L_32' => array( 'minlenght' => 1 ), 
					'RPS_L_33' => array( 'minlenght' => 1 ), 
					'RPS_L_34' => array( 'minlenght' => 1 ), 
					'RPS_L_35' => array( 'minlenght' => 1 ), 
					'RPS_L_36' => array( 'minlenght' => 1 ), 
					'RPS_L_37' => array( 'minlenght' => 1 ), 
					'RPS_L_38' => array( 'minlenght' => 1 ), 
					'RPS_L_39' => array( 'minlenght' => 1 ), 
					'RPS_L_40' => array( 'minlenght' => 1 ), 
					'RPS_L_41' => array( 'minlenght' => 1 ), 
					'RPS_L_42' => array( 'minlenght' => 1 ), 
					'RPS_L_43' => array( 'minlenght' => 1 ), 
					'RPS_L_44' => array( 'minlenght' => 1 ), 
					'RPS_L_45' => array( 'minlenght' => 1 ), 
					'RPS_L_46' => array( 'minlenght' => 1 ), 
					'RPS_L_47' => array( 'minlenght' => 1 ), 
					'RPS_L_48' => array( 'minlenght' => 1 ), 
					'RPS_L_49' => array( 'minlenght' => 1 ), 
					'RPS_L_50' => array( 'minlenght' => 1 ), 
					'RPS_L_51' => array( 'minlenght' => 1 ), 
					'RPS_L_52' => array( 'minlenght' => 1 ), 
					'RPS_L_53' => array( 'minlenght' => 1 ), 
					'RPS_L_54' => array( 'minlenght' => 1 ), 
					'RPS_L_55' => array( 'minlenght' => 1 ), 
					'RPS_L_56' => array( 'minlenght' => 1 ), 
					'RPS_L_57' => array( 'minlenght' => 1 ), 
					'RPS_L_58' => array( 'minlenght' => 1 ), 
					'RPS_L_59' => array( 'minlenght' => 1 ), 
					'RPS_L_60' => array( 'minlenght' => 1 ), 
					'RPS_L_61' => array( 'minlenght' => 1 ), 
					'RPS_L_62' => array( 'minlenght' => 1 ), 
					'RPS_L_63' => array( 'minlenght' => 1 ), 
					'RPS_L_64' => array( 'minlenght' => 1 )
				);

	public function __construct
	(
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\nom035\InsertarFRPS $InsertarFRPS,
		\app\models\usuarios\GetUsuByEmail $GetUsuByEmail
	)
	{
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_frps = $InsertarFRPS;
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