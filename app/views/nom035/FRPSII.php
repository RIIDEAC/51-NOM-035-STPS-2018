<br>
<div class="card">
	<div class="card-header">
		FRPSII
	</div>
	<div class="card-body">
		<label for="FRPSII">En mi trabajo debo brindar servicio a clientes o usuarios: </label>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" value="1" name="FRPSII" required>Sí
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" value="2" name="FRPSII" required checked>No <br>
		</div>
		<div class="alert alert-info">
			En caso de que su respuesta haya sido "Sí" responda los siguientes reactivos, de lo contrario de clic en
			"Enviar".
		</div>
		<form method="post" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarFRPSII/">
			<hr>
			<div class="alert alert-warning">
				Las preguntas siguientes están relacionadas con la atención a clientes y usuarios.
			</div>
			<div class="table-responsive-sm">
				<table class="table">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>65.- Atiendo clientes o usuarios muy enojados</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_65" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_65" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_65" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_65" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_65" required checked>
						</td>
					</tr>
					<tr>
						<td>66.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_66" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_66" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_66" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_66" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_66" required checked>
						</td>
					</tr>
					<tr>
						<td>67.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_67" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_67" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_67" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_67" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_67" required checked>
						</td>
					</tr>
					<tr>
						<td>68.- Mi trabajo me exige atender situaciones de violencia</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_68" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_68" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_68" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_68" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_68" required checked>
						</td>
					</tr>
				</table>
			</div>
			<p>
				<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
				<input class="btn btn-block btn-success" type="submit">
			</p>
		</form>
	</div>
</div>
<br>