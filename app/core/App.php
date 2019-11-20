<?php
namespace app\core;

class App
{
	private     $_contenedor,
                $_controlador = 'inicio',
                $login = 'login',
                $_metodo = 'index',
                $_parametros = [],
                $_autentificar,
                $_config,
                $_default = 'inicio';

	public function __construct(
        \DI\Container $_contenedor, 
        \app\models\session\SessionCheck $SessionCheck, 
        \app\core\Config $_config)
	{
        $this->_contenedor = $_contenedor;
        $this->_autentificar = $SessionCheck;
        $this->_config = $_config;

        $url = $this->parseUrl();
        
        if(file_exists('app/controllers/'. $url[0]. '.php'))
        {
            $this->_controlador = $url[0];
            unset($url[0]);
        }

        //COMPRUEBA SI PARA EL CONTROLADOR NO SE NECESITA LOGIN
        

        if(!in_array($this->_controlador, $this->_config->get('controllers/nologin')))
        {
            //COMPRUEBA LA SESION EN CASO DE QUE SI SE NECESITE LOGIN
            if(!$this->_autentificar->check())
            {
                //SI NO PASA LA COMPROBACION CARGA EL CONTROLADOR DE LOGIN
                $this->_controlador = $this->login;
            } 
        }
        else
        {
            //COMPRUEBA LA SESION EN CASO DE QUE SI SE NECESITE LOGIN
            if($this->_autentificar->check())
            {
                //SI ESTA LOGEADO MANDA A PRINCIPAL
                $this->_controlador = $this->_default;
            }
        }       

        $this->_controlador = 'app\\controllers\\'.$this->_controlador;

        $this->_controlador = $this->_contenedor->get($this->_controlador);

        if(isset($url[1]))
        {
            if(method_exists($this->_controlador, $url[1]))
            {
                $this->_metodo = $url[1];
                unset($url[1]);
            }
        }
        
        $this->_parametros = $url ? array_values($url) : [];
        
        call_user_func_array([$this->_controlador, $this->_metodo], $this->_parametros);
        
        
	}

	public function parseUrl()
	{
		if(isset($_GET['url']))
        {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));    
        }
	}

}