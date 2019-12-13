<br>
<h3>Avance del trabajador</h3>
<div class="col">
	<div class="row">
		<table class="table table-bordered">
			<thead>
				<?php foreach ($data as $usuario) { ?>
				<tr>
					<th scope="col">Cuestionario</th>
					<th scope="col">Avance</th>
				</tr>
				<?php foreach ($usuario as $cuestionario => $avance) { ?>
			</thead>
			<tr>
				<td><?php echo $cuestionario; ?></td>
				<td>
					<?php
		if($avance=='No completado'){
			echo('
		  <div class="alert alert-danger" role="alert">
			<strong>No completado</strong>
		  </div>');
		}
		if ($avance=='Completado') {
			echo('
		  <div class="alert alert-success" role="alert">
			<strong>Completado</strong>
		  </div>');
		}
		?>
				</td>
			</tr>

			<?php } } ?>

		</table>
	</div>
</div>