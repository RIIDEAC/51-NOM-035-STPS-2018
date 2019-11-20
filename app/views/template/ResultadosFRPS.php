<h3>Resultados</h3>

<h4>Cuestionario para identificar los factores de riesgo psicosocial en los centros de trabajo</h4>

<h5>Por categoría</h5>
<table>
	<tr>
		<th>Categoría</th>
		<th>Puntuación</th>
		<th>Riesgo</th>
	</tr>
	<?php foreach($data['Categoria'] as $categoria => $dominio){ ?>
	<tr>
		<td><?php echo $categoria; ?></td>
		<td><?php echo $data['Categoria'][$categoria]['Resultado']; ?></td>
		<td class="<?php echo $data['Categoria'][$categoria]['Riesgo']; ?>"><?php echo $data['Categoria'][$categoria]['Riesgo']; ?></td>
	</tr>
<?php } ?>
</table>

<h5>Por dominio</h5>
<table>
	<tr>
		<th>Dominio</th>
		<th>Puntuación</th>
		<th>Riesgo</th>
	</tr>
	<?php foreach($data['Dominio'] as $dominio => $valor){ ?>
	<tr>
		<td><?php echo $dominio; ?></td>
		<td><?php echo $data['Dominio'][$dominio]['Resultado']; ?></td>
		<td class="<?php echo str_replace(' ', '',$data['Dominio'][$dominio]['Riesgo']); ?>"><?php echo $data['Dominio'][$dominio]['Riesgo']; ?></td>
	</tr>
<?php } ?>
</table>

<h5>Total</h5>
<table>
	<tr>
		<th>Puntuación</th>
		<th>Riesgo</th>
	</tr>
	<tr>
		<td><?php echo $data['Total']['Resultado']; ?></td>
		<td class="<?php echo str_replace(' ', '',$data['Total']['Riesgo']); ?>"><?php echo $data['Total']['Riesgo']; ?></td>
	</tr>
</table>