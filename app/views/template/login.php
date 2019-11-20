<div class="contenedor">
<form class="login" method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>logincheck">
	<h3>Ingresa tus datos</h3>
	<p>
		<label for="CORREO">Correo electrónico:</label><br>
		<input id="CORREO" type="email" name="USU_CORREO" required>
	</p>
	<p>
		<label for="PASS">Contraseña:</label><br>
		<input id="PASS" type="password" name="USU_PASS" required>
	</p>
	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
		<input type="submit">
	</p>
</form>