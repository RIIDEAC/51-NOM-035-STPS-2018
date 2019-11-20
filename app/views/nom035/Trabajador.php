<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarTrabajador">
	<h3>Datos del trabajador</h3>
	
	<label>Sexo:</label><br>
	<p>
		<input type="radio" value="1" name="TRA_SEXO" required>Masculino <br>
		<input type="radio" value="2" name="TRA_SEXO" required>Femenino <br>
	</p>
	<label>Edad en años:</label><br>
	<p>
		<input type="number" min="15" max="100" name="TRA_EDAD" required>
	</p>
	<label>Estado civil:</label><br>
	<p>
		<select name="TRA_CIVIL" required>
			<option value="2">Soltero(a)</option>
			<option value="1">Casado(a)</option>
			<option value="3">Unión libre</option>
			<option value="4">Divorciado(a)</option>
			<option value="5">Viudo(a)</option>
		</select>
	</p>
	<label>Nivel de estudios:</label><br>
	<p>
		<select name="TRA_ESTUDIOS" required>
			<option value="1">Sin información</option>
			<option value="2">Primaria</option>
			<option value="3">Secundaria</option>
			<option value="4">Preparatoria o Bachillerato</option>
			<option value="5">Técnico Superior</option>
			<option value="6">Licenciatura</option>
			<option value="7">Maestría</option>
			<option value="8">Doctorado</option>
		</select>
	</p>
	<label>Ocupación, profesión o puesto:</label><br>
	<p>
		<select name="TRA_OPP" required>
			<option value="1">Sin información</option>
		</select>
	</p>
	<label>Departamento, sección o área:</label><br>
	<p>
		<select name="TRA_DSA" required>
			<option value="1">Sin información</option>
		</select>
	</p>
	<label>Tipo de puesto:</label><br>
	<p>
		<select name="TRA_TIPO_PUESTO" required>
			<option value="1">Operativo</option>
			<option value="2">Profesional o técnico</option>
			<option value="3">Supervisor</option>
			<option value="4">Gerente</option>
		</select>
	</p>
	<label>Tipo de contratación:</label><br>
	<p>
		<select name="TRA_TIPO_CONTRATACION" required>
			<option value="1">Por obra o proyecto</option>
			<option value="2">Por tiempo determinado (temporal)</option>
			<option value="3">Tiempo indefinido</option>
			<option value="4">Honorarios</option>
		</select>
	</p>
	<label>Tipo de personal:</label><br>
	<p>
		<select name="TRA_TIPO_PERSONAL" required>
			<option value="1">Sindicalizado</option>
			<option value="2">Ninguno</option>
			<option value="3">Confianza</option>
		</select>
	</p>
	<label>Tipo de jornada:</label><br>
	<p>
		<select name="TRA_TIPO_JORNADA" required>
			<option value="1">Fijo nocturno (entre las 20:00 y 6:00 hrs)</option>
			<option value="2">Fijo diurno (entre las 6:00 y 20:00 hrs</option>
			<option value="3">Fijo mixto (combinación de nocturno y diurno)</option>
		</select>
	</p>
	<label>Realiza rotación de turnos:</label><br>
	<p>
		<input type="radio" value="1" name="TRA_ROTACION" required>Sí <br>
		<input type="radio" value="2" name="TRA_ROTACION" required>No <br>
	</p>
	<label>Tiempo en el puesto actual:</label><br>
	<p>
		<select name="TRA_TIEMPO_PUESTO" required>
			<option value="1">Menos de 6 meses</option>
			<option value="2">Entre 6 meses y 1 año</option>
			<option value="3">Entre 1 y 4 años</option>
			<option value="4">Entre 5 y 9 años</option>
			<option value="5">Entre 10 y 14 años</option>
			<option value="6">Entre 15 y 19 años</option>
			<option value="7">Entre 20 y 24 años</option>
			<option value="8">25 años o más</option>
		</select>
	</p>
	<label>Tiempo de experiencia laboral:</label><br>
	<p>
		<select name="TRA_EXPERIENCIA_LABORAL" required>
			<option value="1">Menos de 6 meses</option>
			<option value="2">Entre 6 meses y 1 año</option>
			<option value="3">Entre 1 y 4 años</option>
			<option value="4">Entre 5 y 9 años</option>
			<option value="5">Entre 10 y 14 años</option>
			<option value="6">Entre 15 y 19 años</option>
			<option value="7">Entre 20 y 24 años</option>
			<option value="8">25 años o más</option>
		</select>
	</p>

	<p>
		<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
		<input type="submit">
	</p>
</form>