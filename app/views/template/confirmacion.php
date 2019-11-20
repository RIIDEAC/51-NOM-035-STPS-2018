<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>EliminarDatos/eliminar/">
	<label>¿Está seguro de eliminar todos los datos?</label>
	<p>Se eliminaran todos los registros de trabajadores y los cuestionarios que existan registrados</p>
	<p><input type="radio" name="ELIMINAR" value="<?php echo $this->_token->generate(); ?>" required>Sí</p>
	<p><input type="submit" required></p>
</form>