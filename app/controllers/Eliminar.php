<?php
namespace app\controllers;

class Eliminar
{
	private $_view,
			$_fields = array(
					'token' => array('validtoken' => true),
				),
			$_tables = array(
				'FRPS' => array(
					'DAT_FRPS_FRPS', 'DAT_FRPSII_FRPSII', 'DAT_FRPSIII_FRPSIII'
				),
				'ATS' => array(
					'DAT_ATS_ATS', 'DAT_ATSII_ATSII'
				),
				'TRA' => array(
					'DAT_TRABAJADOR_TRA'
				)
			);

	public function __construct
	(
		\app\core\ViewToken $View,
		\app\models\validate\Validate $Validate, 
		\app\models\redirect\Redirect $Redirect,
		\app\models\nom035\EliminarDatosporTabla $EliminarDatosporTabla
	)
	{
		$this->_view = $View;
		$this->_redirect = $Redirect;
		$this->_validate = $Validate;
		$this->_eliminar = $EliminarDatosporTabla;
	}

	public function index($table = null, $token = null)
	{
		if($table && $token)
		{
			if(!$this->_validate->check(array('token' => $token), $this->_fields)->fails())
			{
				foreach ($this->_tables as $key => $value)
				{
					if($table == $key)
					{
						if($this->_eliminar->eliminar($this->_tables[$key]))
						{
							//Borrado realizado
							$this->_redirect->to('RegistroRealizado');
						}
						else
						{
							//Borrado no realizado
							$_SESSION['error'] = 'Error desconocido';
							$this->_redirect->to('RegistroNoRealizado');
						}
					}
				}

				$_SESSION['error'] = 'Error desconocido';
				$this->_redirect->to('RegistroNoRealizado');

			}
			else
			{
				$_SESSION['error'] = $this->_validate->errors()->all();
				$this->_redirect->to('RegistroNoRealizado');
			}
		}
		else
		{
			//reenviar a inicio
			$this->_redirect->to('inicio');
		}
	}
}