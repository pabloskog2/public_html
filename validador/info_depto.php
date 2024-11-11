<?php

	/* 
	*	Archivo de registro de usuarios
	*/

	// Requerir archivo implement

	require_once("implement.php");

	$oficina 		= $_POST['vivienda'];

	$fila 			= Datos_u("viviendas","id = ".$oficina,"*");
?>

Tipologia: <b><?=d($fila['nombre']);?></b>//<?=d($fila['descripcion']);?>//<?=$fila['imagenes'];?>
