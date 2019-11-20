<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarRPSTrabajadoresSupervisar/<?php print_r($data); ?>">
<h3>Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisa.</h3>
<label>Soy jefe de otros trabajadores:</label>
	<p>
		<input type="radio" value="1" name="RPS_3_1" required>Sí <br>
		<input type="radio" value="2" name="RPS_3_1" required checked>No <br>
	</p>
	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
		<input type="submit">
	</p>
</form>
