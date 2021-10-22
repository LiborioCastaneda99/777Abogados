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
        background: linear-gradient(45deg,rgba(0,0,0,.0),rgba(0,0,0,.0));
        background: -webkit-linear-gradient(135deg,rgba(0,0,0,.0),rgba(0,0,0,.0));
    }
  </style>
</head>

<body class="presentation-page sidebar-collapse">
   
    <?php require_once ('menu_principal.php'); ?>
    
    <?php require_once ('btn-whatsapp.php'); ?>
  
    <div class="page-header header-filter" style="background-image: url('assets/img/img____.png');height: 50vh; min-height: 50vh;">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h1 class="title text-center">¿Quiénes somos?</h1>
            </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="cd-section" id="blogs">
                <div class="blogs-1" id="blogs-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <center><img src="http://gesicom.co/img/mision.png" class="img-fluid w-75" alt=""></center>
                            </div>
                            <div class="col-md-8 ml-auto mr-auto">
                                <h3 class="text-justify" style="font-size:20px; font-style: italic; padding:20px 0;">El bufete de 777Abogados S.A.S, busca la prestación de servicios profesionales a nuestros clientes, en las diferentes ramas del derecho, de manera responsable, ética, honesta, eficiente, y con un alto grado de justicia, equidad y prestigio, protegiendo sus derechos en todos los ámbitos nacionales e internacionales mediante alternativas, capacitaciones y resolución de conflictos jurídicos en la sociedad.</h3>
                            </div>
                        </div>
                        <hr class="w-75 mt-3" style="border-top: 3px dashed #3c4858;">    
                        <div class="row mt-3">
                            <div class="col-md-4 ml-auto mr-auto mt-3">
                                <center><img src="http://gesicom.co/img/vision.png" class="img-fluid w-75" alt=""></center>
                            </div>
                            <div class="col-md-8 ml-auto mr-auto  mt-1">
                                <h3 class="text-justify" style="font-size:20px; font-style: italic; padding:20px 0;">La visión de 777Abogadas S.A.S, es proyectarse y convertirse en la mejor firma de asesoría y consultoría jurídica, contable y tributaria, siendo líder en los servicios profesionales y capacitaciones jurídicas más reputas a nivel nacional e internacional, conviértenos en un referente en cuanto a satisfacción del cliente y resultados.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <?php require_once ('footer.php'); ?>

    <?php require_once ('scritps.php'); ?>

</body>

</html>
