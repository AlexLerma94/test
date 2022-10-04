<?php   // actualizar. php

	include("abre.php");
	$id_per     = $_REQUEST['id_per'];	
	$nom_per    = $_POST['nom_per'];    
	$ape_per    = $_POST['ape_per'];
	$gen_per    = $_POST['gen_per'];
	$cur_per    = $_POST['cur_per'];
	$dir_per    = $_POST['dir_per'];
	$ciu_per    = $_POST['ciu_per'];
    $ser_per    = $_POST['ser_per'];
	$est_per    = $_POST['est_per'];
	$hij_per    = $_POST['hij_per'];
	/*aqui guardamos como bits nuestra imagen*/	
	$img_per    = addslashes(file_get_contents($_FILES['img_per']['tmp_name'])); 

    $consulta = "UPDATE personales SET nom_per='$nom_per', ape_per='$ape_per', gen_per='$gen_per', cur_per='$cur_per', 
	dir_per='$dir_per', ciu_per='$ciu_per', ser_per='$ser_per', est_per='$est_per', hij_per='$hij_per', 
	img_per='$img_per' WHERE id_per='$id_per'";

	$resultado = $conexion->query($consulta);
	
	if($resultado){
		header("Location: ../mostrar.php");	
	}else{
		echo "no se modifico";
	}
?>