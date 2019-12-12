<?php
namespace app\core;

class Config
{
	protected	
        $_data = 
        array(
    		'app' => 
                array(
                    'name' => 'NOM035ORG',
                    'author' => 'RIIDE AC',
                    'webauthor' => 'https://demo.nom035.org.mx/',
                    'description' => 'Cuestionarios para el cumplimiento de la NOM-035',
                    'webbase' => 'http://localhost/51-NOM-035-STPS-2018/'
                    ),
            'sesion' => 
                array(
                    'login' => 'LOGILOG',
                    'token' => 'token',
                    'regular' => '3000',
                    'extendida' => '6000'
                    ),
            'dir' => 
                array(
                    'principal' => 'inicio/',
                    'login' => 'login/',
                    'salir' => 'salir/',
                    'lotes' => 'lotes/',
                    'data' => 'app/data/'
                    ),
            'db' => 
                array(
                    'host' => '127.0.0.1',
                    'dbname' => 'demoNom035',
                    'dbuser' => 'root',
                    'dbpass' => ''
                    ),
            'controllers' => 
                array(
                    'nologin' => // ESTAS PAGINAS NO NECESITAN USUARIO LOGEADO
                        array(
                            'login', 
                            'logincheck'
                            )
                    )
    	);

	public function get($path = null)
	{
		if($path)
        {
            $config = $this->_data;
            
            $path = explode('/', $path);
            
            foreach($path as $bit)
            {
                if(isset($config[$bit]))
                {
                    $config = $config[$bit];
                }
            }
            
            return $config;
        }
        
        return false;
       	
	}
}