<?php


require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$areasPracticas=mysqli_query($conexion, "SELECT id, nombre FROM areas_practicas");
$valores=mysqli_query($conexion, "SELECT id, titulo, descripcion, nombre_img, lado_img  FROM valores");

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

    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('assets/img/img_valores.png'); height: 65vh;
        min-height: 65vh;">
        <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title"> Nuestros Valores</h1>
            <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
            </div>
        </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="cd-section" id="blogs">
                <!--     *********     BLOGS 1      *********      -->
                <div class="blogs-1" id="blogs-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">

                                <?php 
                                    while ($row=mysqli_fetch_row($valores)) {
                                        ?>
                                            <div class="card card-plain card-blog" style="margin-bottom: -10px; margin-top: 20px;">
                                                <div class="row">

                                                
                                                        <div class="col-md-5">
                                                            <div class="card-header card-header-image">
                                                            <a href="#pablito">
                                                                <img class="img" src="https://conceptodefinicion.de/wp-content/uploads/2019/12/responsabilidad-.jpg">
                                                            </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h3 class="card-title text-center">
                                                                <i class="material-icons">balance</i> <?= $row[1]; ?>
                                                            </h3>
                                                            <div class="blockquote undefined">
                                                                <small class="text-justify ">
                                                                    <?= $row[2]; ?>
                                                                </small>
                                                            </div>
                                                        </div>

                                                </div>
                                            </div>
                                        <?php 
                                    }
                                ?>
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
