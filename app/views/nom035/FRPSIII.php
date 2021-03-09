<br>
<div class="card">
	<div class="card-header">
		FPRS III
	</div>
	<div class="card-body">
		<label for="FRPSIII">Soy jefe de otros trabajadores: </label>
		<div class="form-check form-check-inline">
			<input type="radio" value="1" name="FRPSIII" required>Sí
		</div>
		<div class="form-check form-check-inline">
			<input type="radio" value="2" name="FRPSIII" required checked>No
		</div>
		<div class="alert alert-info" role="alert">
			En caso de que su respuesta haya sido "Sí" responda los siguientes reactivos, de lo contrario de clic en
			"Enviar".
		</div>
		<form method="post" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarFRPSIII/">
			<div class="alert alert-warning">
				Las preguntas siguientes están relacionadas con las actitudes de las personas que supervisa.
			</div>
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
					<td>69.- Comunican tarde los asuntos de trabajo<br></td>
					<td class="align-middle rd-center">
						<input type="radio" value="4" name="RPS_L_69" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="3" name="RPS_L_69" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="2" name="RPS_L_69" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="1" name="RPS_L_69" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="0" name="RPS_L_69" required checked>
					</td>
				</tr>
				<tr>
					<td>70.- Dificultan el logro de los resultados del trabajo<br></td>
					<td class="align-middle rd-center">
						<input type="radio" value="4" name="RPS_L_70" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="3" name="RPS_L_70" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="2" name="RPS_L_70" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="1" name="RPS_L_70" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="0" name="RPS_L_70" required checked>
					</td>
				</tr>
				<tr>
					<td>71.- Cooperan poco cuando se necesita<br></td>
					<td class="align-middle rd-center">
						<input type="radio" value="4" name="RPS_L_71" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="3" name="RPS_L_71" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="2" name="RPS_L_71" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="1" name="RPS_L_71" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="0" name="RPS_L_71" required checked>
					</td>
				</tr>
				<tr>
					<td>72.- Ignoran las sugerencias para mejorar su trabajo<br></td>
					<td class="align-middle rd-center">
						<input type="radio" value="4" name="RPS_L_72" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="3" name="RPS_L_72" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="2" name="RPS_L_72" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="1" name="RPS_L_72" required>
					</td>
					<td class="align-middle rd-center">
						<input type="radio" value="0" name="RPS_L_72" required checked>
					</td>
				</tr>
			</table>
			<p>
				<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
				<input class="btn btn-success btn-block" type="submit">
			</p>
		</form>
	</div>
</div>