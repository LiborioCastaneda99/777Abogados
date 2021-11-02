<?php

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$areasPracticas=mysqli_query($conexion, "SELECT id, nombre FROM areas_practicas");

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">

  <?php require_once ('head.php'); ?>

  <style>
    .index-page .header-filter:after, .presentation-page .header-filter:after {
        background: rgba(0,0,0,.0);
        background: linear-gradient(45deg,rgba(6,6,6,.6),rgba(6,6,6,.6));
        background: -webkit-linear-gradient(135deg,rgba(6,6,6,.6),rgba(6,6,6,.6));
    }
  </style>
</head>

<body class="presentation-page sidebar-collapse">

  <?php require_once ('menu_principal.php'); ?>
  
  <div class="page-header header-filter" style="background-image: url('assets/img/img____.png');height: 40vh; min-height: 40vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h1 class="title text-center">Solicitudes</h1>
        </div>
      </div>
    </div>
  </div>
  
  <div class="main main-raised">
    <div class="section section-content container" style=" margin-top: 0px;">
      <div class="" id="tablaDatatable"></div>
    </div>

    <!-- Modal Editar-->
    <div class="modal fade bd-example-modal-lg" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Responder solicitud</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="frmnuevoU">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputNombre4">Nombre</label>
                  <input type="text" class="form-control input-sm" id="nombreU" name="nombreU" readonly required="">
                  <input type="text" hidden="" id="idSolicitudU" name="idSolicitudU">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputApellidos4">Apellidos</label>
                  <input type="text" class="form-control input-sm" id="apellidoU" name="apellidoU" readonly required="">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCorreo4">Correo</label>
                  <input type="text" class="form-control input-sm" id="correoU" name="correoU" readonly required="">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputDescripcion4">Descripción</label>
                  <textarea name="mensaje" id="mensaje" class="form-control input-sm" cols="30" readonly rows="3"></textarea>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputRespuesta4">Respuesta al cliente</label>
                  <textarea name="respuesta" id="respuesta" class="form-control input-sm" cols="30" rows="3"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-secondary" id="close-modal" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="btnResponder">Responder</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php require_once ('footer.php'); ?>

  <?php require_once ('scritps.php'); ?>

</body>

</html>

<script src="librerias/jquery.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#btnResponder').click(function(){
			datos=$('#frmnuevoU').serialize();
			  var respuesta = document.getElementsByName("respuesta")[0].value;

        if ((respuesta == "")) {
            Swal.fire({
            icon: 'error',
            text: 'Por favor revisar, debe agregar una respuesta a la solicitud.',
            showConfirmButton: false,
            timer: 1800
            })
			}else{
				$.ajax({
					type:"POST",
					data:datos,
					url:"procesos/actualizar.php",
					success:function(r){
						if(r==1){
              document.getElementById('close-modal').click();
              $('#frmnuevoU')[0].reset();
              $('#tablaDatatable').load('tabla_solicitudes.php');
							Swal.fire(
							'Correcto!',
							'Se ha enviado la respuesta correctamente!',
							'success'
							);					
						}else{
							Swal.fire(
							'Error!',
							'No se ha podido enviar correctamente la respuesta!',
							'error'
							);					
						}
					}
				});
			}
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla_solicitudes.php');
	});

	function agregaFrmActualizar(idCurso){
    $('#respuesta').val("");
    
		$.ajax({
			type:"POST",
			data:"id=" + idCurso,
			url:"procesos/obtenerDatos.php",
			success:function(r){
				datos=jQuery.parseJSON(r);
				$('#idSolicitudU').val(datos['id']);
				$('#nombreU').val(datos['nombre']);
				$('#apellidoU').val(datos['apellido']);
				$('#correoU').val(datos['correo']);
				$('#mensaje').val(datos['mensaje']);
			}
		});
	}
</script>
