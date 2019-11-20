<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarRPSAtencionCliente/<?php print_r($data); ?>">
<h3>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</h3>
<label>En mi trabajo debo brindar servicio a clientes o usuarios:</label>
	<p>
		<input type="radio" value="1" name="RPS_2_1" required>Sí <br>
		<input type="radio" value="2" name="RPS_2_1" required checked>No <br>
	</p>
<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
		<input type="submit">
	</p>