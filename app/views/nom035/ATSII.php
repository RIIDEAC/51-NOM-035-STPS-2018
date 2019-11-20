<p>
	Tenga presente que el siguiete cuestionario se debe de responder únicamente si respondió que sí a algún reactivo del primer cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos severos. 
</p>
<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarATSII/">
	<h3>II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</h3>

	<label>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?</label>
		<p>
		<input type="radio" value="1" name="ATS_RECUERDOS" required>Sí <br>
		<input type="radio" value="2" name="ATS_RECUERDOS" required checked>No <br>
		</p>
	<label>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?</label>
		<p>
		<input type="radio" value="1" name="ATS_SUENOS" required>Sí <br>
		<input type="radio" value="2" name="ATS_SUENOS" required checked>No <br>
		</p>
	<h3>III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</h3>

	<label>¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?</label>
		<p>
		<input type="radio" value="1" name="ATS_SENTIMIENTOS" required>Sí <br>
		<input type="radio" value="2" name="ATS_SENTIMIENTOS" required checked>No <br>
		</p>
	<label>¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?</label>
		<p>
		<input type="radio" value="1" name="ATS_ACTIVIDADES" required>Sí <br>
		<input type="radio" value="2" name="ATS_ACTIVIDADES" required checked>No <br>
		</p> 
	<label>¿Ha tenido dificultad para recordar alguna parte importante del evento?</label>
		<p>
		<input type="radio" value="1" name="ATS_DIFICULTAD" required>Sí <br>
		<input type="radio" value="2" name="ATS_DIFICULTAD" required checked>No <br>
		</p>
	 
	<label>¿Ha disminuido su interés en sus actividades cotidianas?</label>
		<p>
		<input type="radio" value="1" name="ATS_INTERES" required>Sí <br>
		<input type="radio" value="2" name="ATS_INTERES" required checked>No <br>
		</p>
	 
	<label>¿Se ha sentido usted alejado o distante de los demás?</label>
		<p>
		<input type="radio" value="1" name="ATS_ALEJADO" required>Sí <br>
		<input type="radio" value="2" name="ATS_ALEJADO" required checked>No <br>
		</p>
	<label>¿Ha notado que tiene dificultad para expresar sus sentimientos?</label>
		<p>
		<input type="radio" value="1" name="ATS_EXPRESAR" required>Sí <br>
		<input type="radio" value="2" name="ATS_EXPRESAR" required checked>No <br>
		</p> 
	<label>¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?</label>
		<p>
		<input type="radio" value="1" name="ATS_IMPRESION" required>Sí <br>
		<input type="radio" value="2" name="ATS_IMPRESION" required checked>No <br>
		</p>
		<h3>IV Afectación (durante el último mes):</h3>

	<label>¿Ha tenido usted dificultades para dormir?</label>
		<p>
		<input type="radio" value="1" name="ATS_DORMIR" required>Sí <br>
		<input type="radio" value="2" name="ATS_DORMIR" required checked>No <br>
		</p> 
	<label>¿Ha estado particularmente irritable o le han dado arranques de coraje?</label>
		<p>
		<input type="radio" value="1" name="ATS_IRRITABLE" required>Sí <br>
		<input type="radio" value="2" name="ATS_IRRITABLE" required checked>No <br>
		</p>
	<label>¿Ha tenido dificultad para concentrarse?</label>
		<p>
		<input type="radio" value="1" name="ATS_CONCENTRARSE" required>Sí <br>
		<input type="radio" value="2" name="ATS_CONCENTRARSE" required checked>No <br>
		</p>
	<label>¿Ha estado nervioso o constantemente en alerta?</label>
		<p>
		<input type="radio" value="1" name="ATS_NERVIOSO" required>Sí <br>
		<input type="radio" value="2" name="ATS_NERVIOSO" required checked>No <br>
		</p> 
	<label>¿Se ha sobresaltado fácilmente por cualquier cosa?</label>
		<p>
		<input type="radio" value="1" name="ATS_SOBRESALTO" required>Sí <br>
		<input type="radio" value="2" name="ATS_SOBRESALTO" required checked>No <br>
		</p>
	<p>
			<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
			<input type="submit">
		</p>
</form>	