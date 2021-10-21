<?php


require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$areasPracticas=mysqli_query($conexion, "SELECT id, nombre FROM areas_practicas");
$areasPracticas_res=mysqli_fetch_row(mysqli_query($conexion, "SELECT id, nombre, descripcion, servicios FROM areas_practicas WHERE id=".$_GET['id'].""));

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

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/areas_practicas.png'); height: 60vh; min-height: 60vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title"><?php  echo $areasPracticas_res[1];?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section section-text">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <!-- <p> 
              <?php  echo $areasPracticas_res[2];?>
            </p> -->
            <div class="blockquote undefined">
              <small class="text-justify ">
                <?php  echo $areasPracticas_res[2];?>
              </small>
            </div>

            <?php if($areasPracticas_res[3] == 1): ?>
              <h3 class="title">Servicios</h3>
            <?php endif; ?>

          </div>
          <!-- <div class="section col-md-10 ml-auto mr-auto">
            <div class="row">
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="assets/img/examples/blog4.jpg">
              </div>
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="assets/img/examples/blog3.jpg">
              </div>
              <div class="col-md-4">
                <img class="img-raised rounded img-fluid" alt="Raised Image" src="assets/img/examples/blog1.jpg">
              </div>
            </div>
          </div> -->
        </div>
      </div> 
    </div>
  </div>

<?php require_once ('footer.php'); ?>

      <?php require_once ('scritps.php'); ?>

</body>

</html>
