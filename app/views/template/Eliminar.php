<br>
<div class="alert alert-danger">
	<strong>Tenga en cuenta que la siguiente acción no se puede deshacer</strong>
</div>
<h4>De clic en el cuestionario que desea eliminar</h4>
<div class="list-group">
	<a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/TRA/<?php echo $this->_token->generate(); ?>"
		class="list-group-item list-group-item-action">Eliminar
		datos del trabajador</a>
	<a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/ATS/<?php echo $this->_token->generate(); ?>"
		class="list-group-item list-group-item-action">Eliminar
		cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos
	</a>
	<a href="<?php echo $this->_config->get('app/webbase'); ?>Eliminar/FRPS/<?php echo $this->_token->generate(); ?>"
		class="list-group-item list-group-item-action">Eliminar
		cuestionario para identificar los factores de riesgo psicosocial en los centros de trabajo</a>
</div>