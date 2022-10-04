
<?php
	include("abre.php");
	
	$nom_per	= $_POST['nom_per'];
	$ape_per	= $_POST['ape_per'];
	$gen_per	= $_POST['gen_per'];
	$cur_per	= $_POST['cur_per'];
	$dir_per	= $_POST['dir_per'];
	$ciu_per	= $_POST['ciu_per'];
	$ser_per	= $_POST['ser_per'];
	$est_per	= $_POST['est_per'];
	$hij_per	= $_POST['hij_per'];
	$img_per	= addslashes(file_get_contents($_FILES['img_per']['tmp_name']));
	
	$consulta = "INSERT INTO personales(nom_per, ape_per, gen_per, cur_per, dir_per, ciu_per, ser_per, est_per, hij_per, img_per) VALUES
		('$nom_per','$ape_per','$gen_per','$cur_per','$dir_per','$ciu_per','$ser_per','$est_per','$hij_per','$img_per')";
	
	if ($conexion->query($consulta) === TRUE)
	{
		header("Location: ../mostrar.php");
	}
	else
	{
		echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
	$conexion->close();
?>