<form method="post" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarFRPSII/">
	<label>En mi trabajo debo brindar servicio a clientes o usuarios:</label><br>
	<p>
		<input type="radio" value="1" name="FRPSII" required>Sí <br>
		<input type="radio" value="2" name="FRPSII" required checked>No <br>
	</p>
	<p>
		En caso de que su respuesta haya sido "Sí" responda los siguientes reactivos, de lo contrario de clic en "Enviar".
	</p>

	<hr>
		<h3>Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.</h3>
		<label for="RPS_L_65">65.- Atiendo clientes o usuarios muy enojados</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_65" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_65" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_65" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_65" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_65" required checked>Nunca <br>
	</p>
	<label for="RPS_L_66">66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_66" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_66" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_66" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_66" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_66" required checked>Nunca <br>
	</p>
	<label for="RPS_L_67">67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_67" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_67" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_67" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_67" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_67" required checked>Nunca <br>
	</p>
	<label for="RPS_L_68">68.- Mi trabajo me exige atender situaciones de violencia</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_68" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_68" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_68" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_68" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_68" required checked>Nunca <br>
	</p>
	<hr>
	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
		<input type="submit">
	</p>
</form>