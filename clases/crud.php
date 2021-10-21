<?php 

	class crud{

		public function agregarDatosContactos($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
			
			$sql="INSERT INTO solicitudes (nombre, apellidos, correo, mensaje) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
	
			return mysqli_query($conexion,$sql);
		}

	}

 ?>