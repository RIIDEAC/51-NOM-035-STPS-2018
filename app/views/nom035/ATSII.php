<br>
<div class="section">
	<div class="alert alert-warning" role="alert">
		<div class="row">
			<div class="col-2 text-center">
				<i class="fa fa-exclamation-circle fa-3x animated bounceIn slow"></i>
			</div>
			<div class="col">
				Tenga presente que el siguiente cuestionario se debe de responder únicamente si respondió que sí a algún
				reactivo del
				primer cuestionario para identificar a los trabajadores que fueron sujetos a acontecimientos traumáticos
				severos.
			</div>
		</div>
	</div>
	<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarATSII/">
		<div class="card">
			<h5 class="card-header">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):
			</h5>
			<div class="card-body">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_RECUERDOS" id="ATS_RECUERDOS"
										value="1" required>
									<label class="form-check-label" for="ATS_RECUERDOS">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_RECUERDOS" id="ATS_RECUERDOS"
										value="2" required checked>
									<label class="form-check-label" for="ATS_RECUERDOS">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen
								malestar?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SUENOS" id="ATS_SUENOS"
										value="1" required>
									<label class="form-check-label" for="ATS_SUENOS">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SUENOS" id="ATS_SUENOS"
										value="2" required checked>
									<label class="form-check-label" for="ATS_SUENOS">No</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="card">
			<h5 class="card-header">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento
				(durante el último mes):</h5>
			<div class="card-body">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>
								¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones
								que le
								puedan recordar el
								acontecimiento?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SENTIMIENTOS"
										id="ATS_SENTIMIENTOS" value="1" required>
									<label class="form-check-label" for="ATS_SENTIMIENTOS">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SENTIMIENTOS"
										id="ATS_SENTIMIENTOS" value="2" required checked>
									<label class="form-check-label" for="ATS_SENTIMIENTOS">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan
								recuerdos del
								acontecimiento?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ACTIVIDADES"
										id="ATS_ACTIVIDADES" value="1" required>
									<label class="form-check-label" for="ATS_ACTIVIDADES">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ACTIVIDADES"
										id="ATS_ACTIVIDADES" value="2" required checked>
									<label class="form-check-label" for="ATS_ACTIVIDADES">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Ha tenido dificultad para recordar alguna parte importante del evento?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_DIFICULTAD"
										id="ATS_DIFICULTAD" value="1" required>
									<label class="form-check-label" for="ATS_DIFICULTAD">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_DIFICULTAD"
										id="ATS_DIFICULTAD" value="2" required checked>
									<label class="form-check-label" for="ATS_DIFICULTAD">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Ha disminuido su interés en sus actividades cotidianas?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_INTERES" id="ATS_INTERES"
										value="1" required>
									<label class="form-check-label" for="ATS_INTERES">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_INTERES" id="ATS_INTERES"
										value="2" required checked>
									<label class="form-check-label" for="ATS_INTERES">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Se ha sentido usted alejado o distante de los demás?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ALEJADO" id="ATS_ALEJADO"
										value="1" required>
									<label class="form-check-label" for="ATS_ALEJADO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ALEJADO" id="ATS_ALEJADO"
										value="2" required checked>
									<label class="form-check-label" for="ATS_ALEJADO">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Ha notado que tiene dificultad para expresar sus sentimientos?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_EXPRESAR" id="ATS_EXPRESAR"
										value="1" required>
									<label class="form-check-label" for="ATS_EXPRESAR">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_EXPRESAR" id="ATS_EXPRESAR"
										value="2" required checked>
									<label class="form-check-label" for="ATS_EXPRESAR">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que
								otras
								personas o que tiene
								un
								futuro limitado?
							</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_IMPRESION" id="ATS_IMPRESION"
										value="1" required>
									<label class="form-check-label" for="ATS_IMPRESION">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_IMPRESION" id="ATS_IMPRESION"
										value="2" required checked>
									<label class="form-check-label" for="ATS_IMPRESION">No</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<br>
		<div class="card">
			<h5 class="card-header">IV Afectación (durante el último mes):</h5>
			<div class="card-body">
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>¿Ha tenido usted dificultades para dormir?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_DORMIR" id="ATS_DORMIR"
										value="1" required>
									<label class="form-check-label" for="ATS_DORMIR">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_DORMIR" id="ATS_DORMIR"
										value="2" required checked>
									<label class="form-check-label" for="ATS_DORMIR">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Ha estado particularmente irritable o le han dado arranques de coraje?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_IRRITABLE" id="ATS_IRRITABLE"
										value="1" required>
									<label class="form-check-label" for="ATS_IRRITABLE">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_IRRITABLE" id="ATS_IRRITABLE"
										value="2" required checked>
									<label class="form-check-label" for="ATS_IRRITABLE">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Ha tenido dificultad para concentrarse?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_CONCENTRARSE"
										id="ATS_CONCENTRARSE" value="1" required>
									<label class="form-check-label" for="ATS_CONCENTRARSE">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_CONCENTRARSE"
										id="ATS_CONCENTRARSE" value="2" required checked>
									<label class="form-check-label" for="ATS_CONCENTRARSE">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Ha estado nervioso o constantemente en alerta?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_NERVIOSO" id="ATS_NERVIOSO"
										value="1" required>
									<label class="form-check-label" for="ATS_NERVIOSO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_NERVIOSO" id="ATS_NERVIOSO"
										value="2" required checked>
									<label class="form-check-label" for="ATS_NERVIOSO">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Se ha sobresaltado fácilmente por cualquier cosa?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SOBRESALTO"
										id="ATS_SOBRESALTO" value="1" required>
									<label class="form-check-label" for="ATS_SOBRESALTO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SOBRESALTO"
										id="ATS_SOBRESALTO" value="2" required checked>
									<label class="form-check-label" for="ATS_SOBRESALTO">No</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>" required>
				<input type="submit" class="btn btn-success btn-block">
			</div>
		</div>
	</form>
</div>
<br>