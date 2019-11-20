<?php
namespace app\models\token;

class TokenGenerate
{
	public function generate()
	{
	    unset($_SESSION['token']);
		return $_SESSION['token'] = md5(time());
	}
}