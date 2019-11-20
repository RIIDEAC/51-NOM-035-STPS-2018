<?php
namespace app\models\validate;

class Validate
{
	protected	$errorHandler,
				$rules = ['required', 'minlenght', 'maxlenght', 'email', 'alnum', 'match', 'numeric', 'exists', 'verifypass', 'unique', 'validtoken','inpost', 'facturavalida'],
				$items,
				$_db,
				$_dbCount,
				$_dbFirst,
				$_token,
				$_redirect;

	public $messages = [
		'required' 	=> '<div class="alert alert-warning">Omitiste un campo requerido</div>',
		'minlenght' => '<div class="alert alert-warning">Un campo necesita un minimo de :satisifer caracteres</div>',
		'maxlenght' => '<div class="alert alert-warning">Un campo permite un máximo de :satisifer caracteres</div>',
		'email' 	=> '<div class="alert alert-warning">No es un email valido</div>',
		'alnum'		=> '<div class="alert alert-warning">Un campo debe contener numeros o letras</div>',
		'match'		=> '<div class="alert alert-warning">Un campo debe de coincidir con otro</div>',
		'numeric'	=> '<div class="alert alert-warning">Un campo debe der número</div>',
		'exists' 	=> '<div class="alert alert-warning">Uno de los datos no coincide</div>',
		'verifypass'=> '<div class="alert alert-warning">Uno de los datos no coincide</div>',
		'unique' => '<div class="alert alert-warning">Uno de los campos debe de ser unico y ya está registrado</div>',
		'validtoken' => '<div class="alert alert-warning">El sistema ha detectado un reenvio de formulario, no está permitido</div>',
		'inpost' => '<div class="alert alert-warning">Falta un elemento obligatorio</div>',
		'facturavalida' => '<div class="alert alert-warning">No es una factura valida o ya existe</div>'
	];

	public function __construct
	(
		\app\models\validate\ErrorHandler $errorhandler,
		\app\models\database\DBGet $DBGet,
		\app\models\database\DBResultCount $DBResultCount,
		\app\models\database\DBResultFirst $DBResultFirst,
		\app\models\token\TokenCheck $Token,
		\app\models\redirect\Redirect $Redirect
	)
	{
		$this->_token = $Token;
		$this->errorHandler = $errorhandler;
		$this->_db = $DBGet;		
		$this->_dbCount = $DBResultCount;
		$this->_dbFirst = $DBResultFirst;
		$this->_redirect = $Redirect;
	}

	public function check($items, $rules)
	{
		$this->items = $items;
		
		if(!empty($this->items))
		{
			$x=0;
			foreach($items as $item => $value)
			{
				if(in_array($item, array_keys($rules)))
				{
					$this->validate([

						'field' => $item,
						'value' => $value,
						'rules' => $rules[$item]
					]);

					$x++;
				}
			}

			//Si falta un elemento en el POST devuelve error, required sirve para elementos que se mandan vacios
			if(count($rules) !== $x)
			{
				$this->errorHandler->addError(str_replace(['Campo', 'x'], ['Campo', 'x'], $this->messages['inpost']),'inpost');
			}			

			return $this;
		}
		else
		{
			$this->_redirect->to('salir');
		}

	}

	public function errors()
	{
		return $this->errorHandler;
	}

	public function fails()
	{
		return $this->errorHandler->hasErrors();
	}

	protected function validate($item)
	{
		$field = $item['field'];

		foreach($item['rules'] as $rule => $satisifer)
		{
			if(in_array($rule, $this->rules))
			{
				if(!call_user_func_array([$this, $rule], [$field, $item['value'], $satisifer]))
				{
					$this->errorHandler->addError(
						str_replace([':field', ':satisifer'], [$field, $satisifer], $this->messages[$rule]), 
						$field
					);
				}
			}
		}
	}

	protected function facturavalida($field, $value, $satisifer)
	{		
		if($_FILES['XML']["type"] !== "text/xml")
		{
			return false;
		}
	
		$xml = simplexml_load_file($_FILES['XML']['tmp_name']);
		$ns = $xml->getNamespaces(true);
		$xml->registerXPathNamespace('c', $ns['cfdi']);
		$xml->registerXPathNamespace('t', $ns['tfd']);
		
		foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante)
		{
			$clave = 
			(string) $cfdiComprobante['Fecha'].
			(string) $cfdiComprobante['Folio'].
			(string) $cfdiComprobante['Serie'];
		}

		return $this->unique('FAC_CLAVE', $clave, 'DAT_FACTURA_FAC');
	}

	protected function validtoken($field, $value, $satisifer)
	{
		return $this->_token->check($value);
	}

	protected function required($field, $value, $satisifer)
	{
		return !empty(trim($value));
	}

	protected function minlenght($field, $value, $satisifer)
	{
		return mb_strlen($value) >= $satisifer; 
	}

	protected function maxlenght($field, $value, $satisifer)
	{
		return mb_strlen($value) <= $satisifer; 
	}

	protected function email($field, $value, $satisifer)
	{
		return filter_var($value, FILTER_VALIDATE_EMAIL);
	}

	protected function alnum($field, $value, $satisifer)
	{
		return ctype_alnum($value);
	}

	protected function match($field, $value, $satisifer)
	{
		return $value === $this->items[$satisifer];
	}

	protected function numeric($field, $value, $satisifer)
	{
		return is_numeric($value); 
	}

	protected function exists($field, $value, $satisifer)
	{
		if($this->_dbCount->getCount(
			$this->_db->get
			(
				array(
					'table' => $satisifer, 
					'limit' => 1, 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array($field,'=',$value),
					//'and' => array('', '', '')
					), 
				array($field)
			)
		) === 1)
		{
			return true;
		}

		return false;
	}

	protected function validCURP($field, $value, $satisifer)
	{
		$value = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);
		$ini = $value[0].$value[1].$value[2].$value[3];
		$date = $value[4].$value[5].$value[6].$value[7].$value[8].$value[9];
		$sex = $value[10];
		$ent = $value[11].$value[12];
		$con = $value[13].$value[14].$value[15];
		$ren = $value[16].$value[17];

		if(is_numeric($date) && is_numeric($ren))
		{
			return true;
		}

		return false;
	}

	protected function unique($field, $value, $satisifer)
	{
		
		if($this->_dbCount->getCount(
			$this->_db->get
			(
				array(
					'table' => $satisifer, 
					//'limit' => 1, 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array($field,'=',$value),
					//'and' => array('', '', '')
					), 
				array($field)
			)
		) === 0)
		{
			return true;
		}

		return false;
	}

	protected function verifypass($field, $value, $satisifer)
	{
		$get = $this->_db->get
				(
					array(
						'table' => $satisifer, 
						'limit' => 1, 
						//'orderby' => '', 
						//'order' => '', 
						'where' => array('USU_CORREO','=',$_POST['USU_CORREO']),
						//'and' => array('', '', '')
						), 
					array($field)
				);

		if($this->_dbCount->getCount($get) === 1)
		{
			if(password_verify($value, $this->_dbFirst->getFirstObj($get)->USU_PASS))
			{
				return true;
			}
		}

		return false;
	}

}