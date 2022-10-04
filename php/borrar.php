<?php

	include("abre.php");
	$id_per = $_REQUEST['id_per'];
	echo $id_per;
	$consulta = "DELETE FROM personales WHERE id_per = '$id_per'";
	echo $consulta;
	$resultado = $conexion->query($consulta);
	
	if ($conexion->query($consulta) === TRUE){
		header("Location: ../mostrar.php");
	}else{
		echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
?>