<br>
<div class="card">
	<div class="card-header">
		<i class="fa fa-user-tie"></i> Datos del trabajador
	</div>
	<div class="card-body">
		<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarTrabajador">
			<div class="row">
				<div class="col-6">
					<label><i class="fa fa-genderless"></i> Sexo:</label><br>
					<div class="form-check">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="TRA_SEXO" id="TRA_SEXO" value="1"
								required>
							<label class="form-check-label" for="TRA_SEXO"><i class="fa fa-mars"></i> Masculino</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="TRA_SEXO" id="TRA_SEXO" value="2"
								required>
							<label class="form-check-label" for="TRA_SEXO"><i class="fa fa-venus"></i> Femenino</label>
						</div>
					</div>
					<br>

					<div class="form-group">
						<label for="TRA_EDAD"><i class="fa fa-birthday-cake"></i> Edad en años:</label>
						<input class="form-control" type="number" min="15" max="100" name="TRA_EDAD" id="TRA_EDAD"
							required>
					</div>
					<div class="form-group">
						<label for="TRA_CIVIL"><i class="fa fa-user-friends"></i> Estado civil:</label>
						<select class="form-control" name="TRA_CIVIL" id="TRA_CIVIL" required>
							<option value="2">Soltero(a)</option>
							<option value="1">Casado(a)</option>
							<option value="3">Unión libre</option>
							<option value="4">Divorciado(a)</option>
							<option value="5">Viudo(a)</option>
						</select>
					</div>
					<div class="form-group">
						<label for="TRA_ESTUDIOS"><i class="fa fa-user-graduate"></i> Nivel de estudios:</label>
						<select class="form-control" name="TRA_ESTUDIOS" id="TRA_ESTUDIOS" required>
							<option value="1">Sin información</option>
							<option value="2">Primaria</option>
							<option value="3">Secundaria</option>
							<option value="4">Preparatoria o Bachillerato</option>
							<option value="5">Técnico Superior</option>
							<option value="6">Licenciatura</option>
							<option value="7">Maestría</option>
							<option value="8">Doctorado</option>
						</select>
					</div>
					<div class="form-group">
						<label for="TRA_OPP"><i class="fa fa-user-tie"></i> Ocupación, profesión o puesto:</label>
						<select class="form-control" name="TRA_OPP" id="TRA_OPP" required>
							<option value="1">Sin información</option>
						</select>
					</div>
					<div class="form-group">
						<label for="TRA_DSA"><i class="fa fa-id-card"></i> Departamento, sección o área:</label>
						<select class="form-control" name="TRA_DSA" id="TRA_DSA" required>
							<option value="1">Sin información</option>
						</select>
					</div>
					<div class="form-group">
						<label for="TRA_TIPO_PUESTO"><i class="fa fa-id-badge"></i> Tipo de puesto:</label>
						<select class="form-control" name="TRA_TIPO_PUESTO" id="TRA_TIPO_PUESTO" required>
							<option value="1">Operativo</option>
							<option value="2">Profesional o técnico</option>
							<option value="3">Supervisor</option>
							<option value="4">Gerente</option>
						</select>
					</div>
				</div>
				<!---Col 2-->
				<div class="col-6">

					<div class="form-group">
						<label for="TRA_TIPO_CONTRATACION"><i class="fa fa-handshake"></i> Tipo de contratación:</label>
						<select class="form-control" name="TRA_TIPO_CONTRATACION" id="TRA_TIPO_CONTRATACION" required>
							<option value="1">Por obra o proyecto</option>
							<option value="2">Por tiempo determinado (temporal)</option>
							<option value="3">Tiempo indefinido</option>
							<option value="4">Honorarios</option>
						</select>
					</div>
					<label for="TRA_TIPO_PERSONAL"><i class="fa fa-users"></i> Tipo de personal:</label>
					<div class="form-group">
						<select class="form-control" name="TRA_TIPO_PERSONAL" id="TRA_TIPO_PERSONAL" required>
							<option value="1">Sindicalizado</option>
							<option value="2">Ninguno</option>
							<option value="3">Confianza</option>
						</select>
					</div>
					<div class="form-group">
						<label for="TRA_TIPO_JORNADA"><i class="fa fa-clock"></i> Tipo de jornada:</label>
						<select class="form-control" name="TRA_TIPO_JORNADA" id="TRA_TIPO_JORNADA" required>
							<option value="1">Fijo nocturno (entre las 20:00 y 6:00 hrs)</option>
							<option value="2">Fijo diurno (entre las 6:00 y 20:00 hrs</option>
							<option value="3">Fijo mixto (combinación de nocturno y diurno)</option>
						</select>
					</div>
					<div class="form-check">
						<label><i class="fa fa-user-clock"></i> Realiza rotación de turnos:</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="TRA_ROTACION" id="TRA_ROTACION" value="1"
								required>
							<label class="form-check-label" for="TRA_ROTACION">Sí</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="TRA_ROTACION" id="TRA_ROTACION" value="2"
								required>
							<label class="form-check-label" for="TRA_ROTACION">No</label>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="TRA_TIEMPO_PUESTO"><i class="fa fa-business-time"></i> Tiempo en el puesto
							actual:</label><br>
						<select class="form-control" name="TRA_TIEMPO_PUESTO" id="TRA_TIEMPO_PUESTO" required>
							<option value="1">Menos de 6 meses</option>
							<option value="2">Entre 6 meses y 1 año</option>
							<option value="3">Entre 1 y 4 años</option>
							<option value="4">Entre 5 y 9 años</option>
							<option value="5">Entre 10 y 14 años</option>
							<option value="6">Entre 15 y 19 años</option>
							<option value="7">Entre 20 y 24 años</option>
							<option value="8">25 años o más</option>
						</select>
					</div>
					<label for="TRA_EXPERIENCIA_LABORAL"><i class="fa fa-history"></i> Tiempo de experiencia
						laboral:</label><br>
					<div class="form-group">
						<select class="form-control" name="TRA_EXPERIENCIA_LABORAL" id="TRA_EXPERIENCIA_LABORAL"
							required>
							<option value="1">Menos de 6 meses</option>
							<option value="2">Entre 6 meses y 1 año</option>
							<option value="3">Entre 1 y 4 años</option>
							<option value="4">Entre 5 y 9 años</option>
							<option value="5">Entre 10 y 14 años</option>
							<option value="6">Entre 15 y 19 años</option>
							<option value="7">Entre 20 y 24 años</option>
							<option value="8">25 años o más</option>
						</select>
					</div>
					<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
					<input type="submit" class="btn btn-success btn-block">
				</div>
			</div>
		</form>
	</div>
</div>