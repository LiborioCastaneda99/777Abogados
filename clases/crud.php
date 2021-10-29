<?php 

	class crud{

		public function agregarDatosContactos($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
	
			$sql = 'INSERT INTO solicitudes (nombre, apellidos, correo, mensaje) VALUES ("'.$datos[0].'","'.$datos[1].'","'.$datos[2].'","'.$datos[3].'")';
	
			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($id){
			$obj =  new conectar();
			$conexion = $obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
			$sql = "SELECT id, nombre, apellidos, correo, mensaje FROM solicitudes WHERE id = '$id'";
			$result = mysqli_query($conexion,$sql);
			$ver = mysqli_fetch_row($result);
			
			$datos = array(
				'id' => $ver[0],
				'nombre' => $ver[1],
				'apellido' => $ver[2],
				'correo' => $ver[3] ,
				'mensaje' => $ver[4]
			);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$tildes = $conexion->query("SET NAMES 'utf8'");
			
			$sql="UPDATE solicitudes SET respuesta ='$datos[1]', estado = 0 WHERE id='$datos[0]' AND estado = 1";

			

			//correo

			return mysqli_query($conexion,$sql);
		}


	}

 ?>