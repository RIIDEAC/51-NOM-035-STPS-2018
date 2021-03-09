<br>
<div class="section">
	<div class="card">
		<h5 class="card-header">Cuestionario para Identificar los factores de riesgo psicosocial y evaluar el entorno organizacional en los centros de trabajo</h5>
		<div class="card-body">
			<p>
				El siguiente cuestionario consta de 64 reactivos, para cada uno de ellos tiene las mismas opciones:
				Siempre, Casi
				siempre, Algunas veces, Casi nunca y Nunca.
			</p>
			<div class="alert alert-warning" role="alert">
				Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.
			</div>
			<form method="post" action="<?php echo $this->_config->get('app/webbase'); ?>RegistrarFRPS/">
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
							<td>1.- El espacio donde trabajo me permite realizar mis actividades de manera segura e
								higiénica
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_1" required checked>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_1" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_1" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_1" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_1" required>
							</td>
						</tr>
						<tr>
							<td>2.- Mi trabajo me exige hacer mucho esfuerzo físico</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_2" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_2" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_2" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_2" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_2" required checked>
							</td>
						</tr>
						<tr>
							<td>3.- Me preocupa sufrir un accidente en mi trabajo</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_3" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_3" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_3" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_3" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_3" required checked>
							</td>
						</tr>
						<tr>
							<td>4.- Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_4" required checked>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_4" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_4" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_4" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_4" required>
							</td>
						</tr>
						<tr>
							<td>5.- Considero que las actividades que realizo son peligrosas</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_5" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_5" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_5" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_5" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_5" required checked>
							</td>
						</tr>
					</table>
				</div>
				<div class="alert alert-warning" role="alert">
					Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.
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
							<td>6.- Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_6" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_6" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_6" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_6" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_6" required checked>
							</td>
						</tr>
						<tr>
							<td>7.- Por la cantidad de trabajo que tengo debo trabajar sin parar</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_7" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_7" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_7" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_7" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_7" required checked>
							</td>
						</tr>
						<tr>
							<td>8.- Considero que es necesario mantener un ritmo de trabajo acelerado</td>
							<td class="align-middle rd-center">
								<input type="radio" value="4" name="RPS_L_8" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="3" name="RPS_L_8" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="2" name="RPS_L_8" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="1" name="RPS_L_8" required>
							</td>
							<td class="align-middle rd-center">
								<input type="radio" value="0" name="RPS_L_8" required checked>
							</td>
						</tr>
					</table>
				</div>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>9.- Mi trabajo exige que esté muy concentrado<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_9" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_9" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_9" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_9" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_9" required checked>
						</td>
					</tr>
					<tr>
						<td>10.- Mi trabajo requiere que memorice mucha información</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_10" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_10" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_10" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_10" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_10" required checked>
						</td>
					</tr>
					<tr>
						<td>11.- En mi trabajo tengo que tomar decisiones difíciles muy rápido</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_11" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_11" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_11" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_11" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_11" required checked>
						</td>
					</tr>
					<tr>
						<td>12.- Mi trabajo exige que atienda varios asuntos al mismo tiempo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_12" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_12" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_12" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_12" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_12" required checked>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las
					responsabilidades que tiene.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>13.- En mi trabajo soy responsable de cosas de mucho valor</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_13" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_13" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_13" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_13" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_13" required checked>
						</td>
					</tr>
					<tr>
						<td>14.- Respondo ante mi jefe por los resultados de toda mi área de trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_14" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_14" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_14" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_14" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_14" required checked>
						</td>
					</tr>
					<tr>
						<td>15.- En el trabajo me dan órdenes contradictorias</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_15" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_15" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_15" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_15" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_15" required checked>
						</td>
					</tr>
					<tr>
						<td>16.- Considero que en mi trabajo me piden hacer cosas innecesarias</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_16" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_16" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_16" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_16" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_16" required checked>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con su jornada de trabajo.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>17.- Trabajo horas extras más de tres veces a la semana</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_17" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_17" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_17" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_17" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_17" required checked>
						</td>
					</tr>
					<tr>
						<td>18.- Mi trabajo me exige laborar en días de descanso, festivos o fines de semana</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_18" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_18" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_18" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_18" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_18" required checked>
						</td>
					</tr>
					<tr>
						<td>19.- Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o
							personales</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_19" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_19" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_19" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_19" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_19" required checked>
						</td>
					</tr>
					<tr>
						<td>20.- Debo atender asuntos de trabajo cuando estoy en casa</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_20" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_20" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_20" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_20" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_20" required checked>
						</td>
					</tr>
					<tr>
						<td>21.- Pienso en las actividades familiares o personales cuando estoy en mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_21" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_21" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_21" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_21" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_21" required checked>
						</td>
					</tr>
					<tr>
						<td>22.-Pienso que mis responsabilidades familiares afectan mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_22" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_22" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_22" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_22" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_22" required checked>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>23.- Mi trabajo permite que desarrolle nuevas habilidades</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_23" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_23" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_23" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_23" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_23" required>
						</td>
					</tr>
					<tr>
						<td>24.- En mi trabajo puedo aspirar a un mejor puesto</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_24" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_24" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_24" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_24" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_24" required>
						</td>
					</tr>
					<tr>
						<td>25.- Durante mi jornada de trabajo puedo tomar pausas cuando las necesito</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_25" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_25" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_25" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_25" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_25" required>
						</td>
					</tr>
					<tr>
						<td>26.- Puedo decidir cuánto trabajo realizo durante la jornada laboral</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_26" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_26" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_26" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_26" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_26" required>
						</td>
					</tr>
					<tr>
						<td>27.- Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_27" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_27" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_27" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_27" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_27" required>
						</td>
					</tr>
					<tr>
						<td>28.- Puedo cambiar el orden de las actividades que realizo en mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_28" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_28" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_28" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_28" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_28" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo
					(considere los
					últimos cambios realizados).
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>29.- Los cambios que se presentan en mi trabajo dificultan mi labor</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_29" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_29" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_29" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_29" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_29" required checked>
						</td>
					</tr>
					<tr>
						<td>30.- Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o
							aportaciones<br>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_30" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_30" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_30" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_30" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_30" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona
					sobre su
					trabajo.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>31.- Me informan con claridad cuáles son mis funciones<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_31" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_31" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_31" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_31" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_31" required>
						</td>
					</tr>
					<tr>
						<td>32.- Me explican claramente los resultados que debo obtener en mi trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_32" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_32" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_32" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_32" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_32" required>
						</td>
					</tr>
					<tr>
						<td>33.- Me explican claramente los objetivos de mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_33" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_33" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_33" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_33" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_33" required>
						</td>
					</tr>
					<tr>
						<td>34.- Me informan con quién puedo resolver problemas o asuntos de trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_34" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_34" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_34" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_34" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_34" required>
						</td>
					</tr>
					<tr>
						<td>35.- Me permiten asistir a capacitaciones relacionadas con mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_35" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_35" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_35" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_35" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_35" required>
						</td>
					</tr>
					<tr>
						<td>36.- Recibo capacitación útil para hacer mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_36" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_36" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_36" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_36" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_36" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>37.- Mi jefe ayuda a organizar mejor el trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_37" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_37" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_37" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_37" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_37" required>
						</td>
					</tr>
					<tr>
						<td>38.- Mi jefe tiene en cuenta mis puntos de vista y opiniones<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_38" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_38" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_38" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_38" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_38" required>
						</td>
					</tr>
					<tr>
						<td>39.- Mi jefe me comunica a tiempo la información relacionada con el trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_39" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_39" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_39" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_39" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_39" required>
						</td>
					</tr>
					<tr>
						<td>40.- La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_40" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_40" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_40" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_40" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_40" required>
						</td>
					</tr>
					<tr>
						<td>41.- Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_41" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_41" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_41" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_41" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_41" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes se refieren a las relaciones con sus compañeros.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>42.- Puedo confiar en mis compañeros de trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_42" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_42" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_42" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_42" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_42" required>
						</td>
					</tr>
					<tr>
						<td>43.- Entre compañeros solucionamos los problemas de trabajo de forma respetuosa<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_43" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_43" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_43" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_43" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_43" required>
						</td>
					</tr>
					<tr>
						<td>44.- En mi trabajo me hacen sentir parte del grupo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_44" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_44" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_44" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_44" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_44" required>
						</td>
					</tr>
					<tr>
						<td>45.- Cuando tenemos que realizar trabajo de equipo los compañeros colaboran<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_45" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_45" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_45" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_45" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_45" required>
						</td>
					</tr>
					<tr>
						<td>46.- Mis compañeros de trabajo me ayudan cuando tengo dificultades<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_46" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_46" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_46" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_46" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_46" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el
					trabajo, el
					reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>47.- Me informan sobre lo que hago bien en mi trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_47" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_47" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_47" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_47" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_47" required>
						</td>
					</tr>
					<tr>
						<td>48.- La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi
							desempeño<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_48" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_48" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_48" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_48" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_48" required>
						</td>
					</tr>
					<tr>
						<td>49.- En mi centro de trabajo me pagan a tiempo mi salario<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_49" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_49" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_49" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_49" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_49" required>
						</td>
					</tr>
					<tr>
						<td>50.- El pago que recibo es el que merezco por el trabajo que realizo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_50" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_50" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_50" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_50" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_50" required>
						</td>
					</tr>
					<tr>
						<td>51.- Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_51" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_51" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_51" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_51" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_51" required>
						</td>
					</tr>
					<tr>
						<td>52.- Las personas que hacen bien el trabajo pueden crecer laboralmente</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_52" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_52" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_52" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_52" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_52" required>
						</td>
					</tr>
					<tr>
						<td>53.- Considero que mi trabajo es estable</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_53" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_53" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_53" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_53" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_53" required>
						</td>
					</tr>
					<tr>
						<td>54.- En mi trabajo existe continua rotación de personal</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_54" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_54" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_54" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_54" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_54" required checked>
						</td>
					</tr>
					<tr>
						<td>55.- Siento orgullo de laborar en este centro de trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_55" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_55" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_55" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_55" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_55" required>
						</td>
					</tr>
					<tr>
						<td>56.- Me siento comprometido con mi trabajo</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_56" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_56" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_56" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_56" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_56" required>
						</td>
					</tr>
				</table>
				<div class="alert alert-warning" role="alert">
					Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso,
					hostigamiento,
					acoso psicológico).
				</div>
				<table class="table table-hover">
					<tr>
						<th></th>
						<th class="tb-header" bgcolor="#d32f2f">Siempre</th>
						<th class="tb-header" bgcolor="#ef6c00">Casi siempre</th>
						<th class="tb-header" bgcolor="#fbc02d">Algunas veces </th>
						<th class="tb-header" bgcolor="#388e3c">Casi nunca</th>
						<th class="tb-header" bgcolor="#1976d2">Nunca</th>
					</tr>
					<tr>
						<td>57.- En mi trabajo puedo expresarme libremente sin interrupciones<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_57" required checked>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_57" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_57" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_57" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_57" required>
						</td>
					</tr>
					<tr>
						<td>58.- Recibo críticas constantes a mi persona y/o trabajo<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_58" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_58" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_58" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_58" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_58" required checked>
						</td>
					</tr>
					<tr>
						<td>59.- Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_59" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_59" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_59" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_59" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_59" required checked>
						</td>
					</tr>
					<tr>
						<td>60.- Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de<br>
							decisiones<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_60" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_60" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_60" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_60" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_60" required checked>
						</td>
					</tr>
					<tr>
						<td>61.- Se manipulan las situaciones de trabajo para hacerme parecer un mal<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_61" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_61" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_61" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_61" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_61" required checked>
						</td>
					</tr>
					<tr>
						<td>62.- Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores<br></td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_62" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_62" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_62" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_62" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_62" required checked>
						</td>
					</tr>
					<tr>
						<td>63.- Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en
							mi<br> trabajo<br>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_63" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_63" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_63" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_63" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_63" required checked>
						</td>
					</tr>
					<tr>
						<td>64.- He presenciado actos de violencia en mi centro de trabajo<br></td>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="4" name="RPS_L_64" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="3" name="RPS_L_64" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="2" name="RPS_L_64" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="1" name="RPS_L_64" required>
						</td>
						<td class="align-middle rd-center">
							<input type="radio" value="0" name="RPS_L_64" required checked>
						</td>
					</tr>
				</table>
				<p>
					<input type="hidden" name="token" value="<?php echo $this->_token->generate(); ?>">
					<input type="submit" class="btn btn-block btn-success">
				</p>
		</div>
	</div>
</div>

</form>