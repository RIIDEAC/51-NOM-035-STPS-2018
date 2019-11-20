<h3>Se presentaron estos errores:</h3>
<ul>
<?php
foreach ($data as $key => $error)
{
	foreach ($error as $k => $value)
	{
?>
		<li><?php echo $value; ?></li><br>
<?php	
	}
}
?>
</ul>