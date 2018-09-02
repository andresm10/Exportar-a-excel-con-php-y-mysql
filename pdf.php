<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=usuarios.xls');

	require_once('conexion.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM usuarios";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Telefono</th>
		<th>Ciudad</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codigo']; ?></td>
					<td><?php echo $row['nombres']; ?></td>
					<td><?php echo $row['apellidos']; ?></td>
					<td><?php echo $row['telefono']; ?></td>
					<td><?php echo $row['ciudad']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>