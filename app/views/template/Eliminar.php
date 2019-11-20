<h3>Tenga en cuenta que la siguiente acción no se puede deshacer</h3>
<h4>De clic en el cuestionario que desea eliminar</h4>
<ul>
	<li><a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/TRA/<?php echo $this->_token->generate(); ?>">Eliminar datos del trabajador</a></li><br>
	
	<li><a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/ATS/<?php echo $this->_token->generate(); ?>">Eliminar cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos </a></li><br>

	<li><a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/FRPS/<?php echo $this->_token->generate(); ?>">Eliminar cuestionario para identificar los factores de riesgo psicosocial en los centros de trabajo</a></li><br>
</ul>