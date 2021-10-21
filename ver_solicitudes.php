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
  
  <div class="page-header header-filter" style="background-image: url('assets/img/img_official.jpeg');height: 40vh; min-height: 40vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
  <div class="section section-content container" style=" margin-top: 0px;">
		
                <!-- menu -->

                        
                                <div class="" id="tablaDatatable"></div>
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
		$('#tablaDatatable').load('tabla_solicitudes.php');
	});

</script>