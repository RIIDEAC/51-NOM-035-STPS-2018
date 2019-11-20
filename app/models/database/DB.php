<?php
namespace app\models\database;
use pdo;

class DB
{
	private  	$_con = null,
				$_method = null,
				$_query;

	public function __construct(\app\models\database\DBCon $DBCon)
	{
		$this->_con = $DBCon;
		$this->_con = $this->_con->getCon();
	}

	public function query($method = array())
	{
		$this->_method = $method;

		if($this->_query = $this->_con->prepare($this->_method['sql']))
		{
			if(!empty($this->_method['values']))
			{
				$x=1;
				foreach ($this->_method['values'] as $value)
				{
					if($value !== null)
					{
						$this->_query->bindValue($x,$value);
					}

					$x++;	
				}
			}			

			if(!$this->_query->execute())
			{
				return false;				
			}

			return $this->_query;
		}
		
		return false;		
	}

	public function lastId()
	{
		return $this->_con->lastInsertId();
	}	

}