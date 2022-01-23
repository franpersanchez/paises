
<html>
	<head>
		<title>Lista de paises</title>
<style>
			table, th, td {
 			 border: 1px solid black;
			  border-collapse: collapse;
			  text-align: left;
			  padding: 5px;
			  		 
			}

			th {
				background-color: #04AA6D;
				color: white;
}

</style>
				
	</head>
	<body>
		
	<?php
	$mysqli=new mysqli("localhost","root","","paises"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
}
	
?>

		
		
	<?php 
	
	$sql = "SELECT full_name, iso3, continent_code FROM countries";
	

	$result = $mysqli->query($sql); ?>
	

	<table >
	<thead>
		<tr>
			<th><b>Pais</b></th>
			<th><b>ID</b></th>
			<th><b>Continent</b></th>
			
		</tr>
		<tbody>
			<?php while($row=$result->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row['full_name'];?>
					</td>
					<td>
						<?php echo $row['iso3'];?>
					</td>
					<td>
						<?php echo $row['continent_code'];?>
					</td>
					
				</tr>
			<?php } ?>
		</tbody>
	</table>
							


		</body>
	</html>	
	
