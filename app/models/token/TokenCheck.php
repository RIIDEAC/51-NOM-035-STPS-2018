<?php
namespace app\models\token;

class TokenCheck
{
	public function check($token = null)
	{
		if(isset($_SESSION['token']) && $token === $_SESSION['token'])
		{
			unset($_SESSION['token']);
			return true;
		}

		return false;
	}
}