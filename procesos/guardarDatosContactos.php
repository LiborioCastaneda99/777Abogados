<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombres'],
		$_POST['apellidos'],
		$_POST['email'],
		$_POST['mensaje']
				);

	
		echo $obj->agregarDatosContactos($datos);
	

 ?> 