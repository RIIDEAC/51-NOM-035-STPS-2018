<br>
<div class="section">
	<form method="POST" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarATS">
		<div class="card">
			<h5 class="card-header">I.- Acontecimiento traumático severo</h5>
			<div class="card-body">
				<p>
					<strong>
						¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como
						los
						siguientes?
					</strong>
				</p>
				<table class="table table-hover">
					<tbody>
						<tr>
							<td>¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión
								grave?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ACCIDENTE" id="ATS_ACCIDENTE"
										value="1" required>
									<label class="form-check-label" for="ATS_ACCIDENTE">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ACCIDENTE" id="ATS_ACCIDENTE"
										value="2" required checked>
									<label class="form-check-label" for="ATS_ACCIDENTE">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Asaltos?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ASALTO" id="ATS_ASALTO"
										value="1" required>
									<label class="form-check-label" for="ATS_ASALTO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_ASALTO" id="ATS_ASALTO"
										value="2" required checked>
									<label class="form-check-label" for="ATS_ASALTO">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Actos violentos que derivaron en lesiones graves?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_VIOLENCIA" id="ATS_VIOLENCIA"
										value="1" required>
									<label class="form-check-label" for="ATS_VIOLENCIA">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_VIOLENCIA" id="ATS_VIOLENCIA"
										value="2" required checked>
									<label class="form-check-label" for="ATS_VIOLENCIA">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Secuestro?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SECUESTRO" id="ATS_SECUESTRO"
										value="1" required>
									<label class="form-check-label" for="ATS_SECUESTRO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_SECUESTRO" id="ATS_SECUESTRO"
										value="2" required checked>
									<label class="form-check-label" for="ATS_SECUESTRO">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Amenazas?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_AMENAZAS" id="ATS_AMENAZAS"
										value="1" required>
									<label class="form-check-label" for="ATS_AMENAZAS">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_AMENAZAS" id="ATS_AMENAZAS"
										value="2" required checked>
									<label class="form-check-label" for="ATS_AMENAZAS">No</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</td>
							<td>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_OTRO" id="ATS_OTRO" value="1"
										required>
									<label class="form-check-label" for="ATS_OTRO">Sí</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="ATS_OTRO" id="ATS_OTRO" value="2"
										required checked>
									<label class="form-check-label" for="ATS_OTRO">No</label>
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