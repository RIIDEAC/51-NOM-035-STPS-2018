<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarATS">
	<h3>I.- Acontecimiento traumático severo</h3>
	
	<h4>¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes?</h4>

	<label>¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_ACCIDENTE" required>Sí <br>
		<input type="radio" value="2" name="ATS_ACCIDENTE" required checked>No <br>
		</p>
	<label>¿Asaltos?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_ASALTO" required>Sí <br>
		<input type="radio" value="2" name="ATS_ASALTO" required checked>No <br>
		</p>
	<label>¿Actos violentos que derivaron en lesiones graves?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_VIOLENCIA" required>Sí <br>
		<input type="radio" value="2" name="ATS_VIOLENCIA" required checked>No <br>
		</p>
	<label>¿Secuestro?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_SECUESTRO" required>Sí <br>
		<input type="radio" value="2" name="ATS_SECUESTRO" required checked>No <br>
		</p>
	<label>¿Amenazas?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_AMENAZAS" required>Sí <br>
		<input type="radio" value="2" name="ATS_AMENAZAS" required checked>No <br>
		</p>
	<label>¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</label><br>
		<p>
		<input type="radio" value="1" name="ATS_OTRO" required>Sí <br>
		<input type="radio" value="2" name="ATS_OTRO" required checked>No <br>
		</p>
	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
		<input type="submit">
	</p>
</form>