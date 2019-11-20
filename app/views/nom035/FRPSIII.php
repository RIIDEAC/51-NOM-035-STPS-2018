<form method="post" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarFRPSIII/">
	<label>Soy jefe de otros trabajadores:</label><br>
	<p>
		<input type="radio" value="1" name="FRPSIII" required>Sí <br>
		<input type="radio" value="2" name="FRPSIII" required checked>No <br>
	</p>
	<p>
		En caso de que su respuesta haya sido "Sí" responda los siguientes reactivos, de lo contrario de clic en "Enviar".
	</p>

	<hr>
		<h3>Las preguntas siguientes están relacionadas con las actitudes de las personas que supervisa.</h3>
		<label for="RPS_L_69">69.- Comunican tarde los asuntos de trabajo</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_69" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_69" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_69" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_69" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_69" required checked>Nunca <br>
	</p>
	<label for="RPS_L_70">70.- Dificultan el logro de los resultados del trabajo</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_70" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_70" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_70" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_70" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_70" required checked>Nunca <br>
	</p>
	<label for="RPS_L_71">71.- Cooperan poco cuando se necesita</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_71" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_71" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_71" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_71" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_71" required checked>Nunca <br>
	</p>
	<label for="RPS_L_72">72.- Ignoran las sugerencias para mejorar su trabajo</label><br>
	<p>
		<input type="radio" value="4" name="RPS_L_72" required>Siempre <br>
		<input type="radio" value="3" name="RPS_L_72" required>Casi siempre <br>
		<input type="radio" value="2" name="RPS_L_72" required>Algunas veces <br>
		<input type="radio" value="1" name="RPS_L_72" required>Casi nunca <br>
		<input type="radio" value="0" name="RPS_L_72" required checked>Nunca <br>
	</p>
	<hr>
	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
		<input type="submit">
	</p>
</form>