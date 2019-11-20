<?php
namespace app\models\input;

class Input
{
	public function exists($type = 'post')
	{
		switch($type)
		{
			case 'post' :
				return (!empty($_POST)) ? true : false;
			break;
			default:
				return false;
			break;
		}
	}

	public function get($name = null)
	{
		if($name)
		{
			if(isset($_POST[$name]))
			{
				return htmlentities($_POST[$name]);
			}
		}
		
		$post = array();

		foreach ($_POST as $key => $value)
		{
			
			array_push($post, array($key => htmlentities($value)));
			
		}

		return ($post);
	}
}