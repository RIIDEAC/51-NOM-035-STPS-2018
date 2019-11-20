<h3>Avance del trabajador</h3>
<table>

<?php foreach ($data as $usuario) { ?>

	<tr>
		<th>Cuestionario</th>
		<th>Avance</th>
	</tr>

<?php foreach ($usuario as $cuestionario => $avance) { ?>

		<tr>
		    <td><?php echo $cuestionario; ?></td>
		    <td><?php echo $avance; ?></td>
		</tr>

<?php } } ?>

</table>
