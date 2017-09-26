<h1>mi taller</h1>
hola mundo

mi nombre es <?php echo $nombre; ?><br>

mi dedad es <?php echo $edad;?>

<pre><?php var_dump($ciudades)?></pre>


<br><br><br>


<table border="1px">
	<tr>
		<td>ciudad</td>
		<td>poblacion</td>
	</tr>
        <?php foreach ($ciudades as $ciudad){ ?>//saqueme cada fila en la variable ciudad la variable ciudad se declara hay mismo 
	<tr>
		<td><?php echo $ciudad['Name']; ?></td>
		<td><?php echo $ciudad['Population']; ?></td>
	</tr>
        <?php } ?>
</table>