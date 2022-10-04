<?php // mostrar.php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar</title>
	<meta http-equiv="Content-Type"; charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">
	
	
</head>

	<header>
	</header><br>

		<body>
			<center>
				<h2>Foxconn</h2>
				<h3>Departamento de Recursos Humanos</h3>
				<h5>Datos Personales de Empleados</h5><br><br>
			<table border=0>
				<thead>
				
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Genero</th>
						<th>CURP</th>
						<th>Direccion</th>
						<th>Ciudad</th>
						<th>Servicio Medico</th>
						<th>Estado civil</th>
						<th>Hijos</th>
						<th>Imagen</th>
					</tr>
				</thead>
			<tbody>
			
				<?php
					include ("php/abre.php");
					$consulta = "SELECT * FROM personales";
					$resultado = $conexion->query($consulta);
					$a=1;
					while($row=$resultado->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['id_per'];	?></td>
					<td><?php echo $row['nom_per'];	?></td>
					<td><?php echo $row['ape_per'];	?></td>
					<td><?php echo $row['gen_per'];	?></td>
					<td><?php echo $row['cur_per'];	?></td>
					<td><?php echo $row['dir_per'];	?></td>
					<td><?php echo $row['ciu_per'];	?></td>
					<td><?php echo $row['ser_per'];	?></td>
					<td><?php echo $row['est_per'];	?></td>
					<td><?php echo $row['hij_per'];	?></td>

					<td><img height="50px" src="data:image/jpeg;base64,<?php echo base64_encode($row['img_per']);	?>"></td>
					
					
					<th><a href="php/modificar.php?id_per=<?php echo $row['id_per']; ?>"><img height="35px" src="img/cam.png"></a></th>
					
					
					<th><a href="php/eliminar.php?id_per=<?php echo $row['id_per']; ?>"><img height="30px" src="img/borr.png"></a></th>
				</tr>
				
			</tbody>
			
				<?php
					}
				?>
			</table>
			<tr>
				<th colspan="11"><a href="php/agregar.php">Agregar Empleados</th>
			</tr>
			</center>
		</body><br><br>
	
	<footer>
		<center>
			<p>Desarrolladores IT / Contacto: desarrollajuarez@gmail.com</p>
			<p>Ciudad Juarez, Chih. Agosto - 2022</p>
		</center>
	</footer>
</html>
			
			
			