<?php
namespace app\models\validate;

class Fields
{
	private $_fields;

	public function get($formato = null)
	{
		if(file_exists('app/lib/formatos/' . $formato . '.php'))
		{
			return require_once ('app/lib/formatos/' . $formato . '.php');

		}
	}	
}