<?php
namespace app\models\archivos;
/**
 * 
 */
class CrearTXT
{
	private $_indice = array(
			'Categoria', 'Dominio'
			);
	
	public function __construct
	(
		
	)
	{
		# code...
	}

	public function crear($data = array(), $ruta = null)
	{
		unlink($ruta);

		$texto = "Rango|Nombre|Puntuación|Riesgo\r\n";
		
		if($archivo = fopen($ruta, "a"))
	    {				    
	    	foreach ($data as $key => $value)
	    	{
	    		foreach ($this->_indice as $indice)
	    		{
	    			if($key == $indice)
	    			{
	    				foreach ($value as $k => $v)
	    				{
	    					$texto = $texto.$key.'|'.$k.'|'.$v['Resultado'].'|'.$v['Riesgo']."\r\n";
	    				}
	    			}
	    		}
	    	}


	        if(fwrite($archivo, $texto))
	        {
	        	fclose($archivo);
	            return true;
	        }
	        
	 		fclose($archivo);
	 		
	 		return false;
	        
	    }
	}
}