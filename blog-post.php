<?php


require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$tildes = $conexion->query("SET NAMES 'utf8'");
$areasPracticas=mysqli_query($conexion, "SELECT id, nombre FROM areas_practicas");
$areasPracticas_res=mysqli_fetch_row(mysqli_query($conexion, "SELECT id, nombre, descripcion FROM areas_practicas WHERE id=".$_GET['id'].""));

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    777Abogados
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'>
  <!-- Extra details for Live View on GitHub Pages -->
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="777Abogados">
  <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!--     Fonts and icons     -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/css.css?Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.min.css?v=2.2.0" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet">
  <link href="assets/demo/vertical-nav.css" rel="stylesheet">
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
 
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('https://lh3.googleusercontent.com/jR76iA-EVyeTwVygEf-kCnu8_KIaGAzKa55mgiqzqx5LOxuvesrBUUwP-hMakOef0qsKag=w16383'); height: 65vh;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title"><?php  echo $areasPracticas_res[1];?></h1>
          <h4 class="col-md-10 ml-auto mr-auto text-center"><?php  echo $areasPracticas_res[2];?></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section section-text">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h3 class="title">The Castle Looks Different at Night...</h3>
            <p>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn&apos;t scroll to get here. Add a button if you want the user to see more. We are here to make life better.
              <br> <br>
              And now I look and look around and there&#x2019;s so many Kanyes I&apos;ve been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... and thank you for turning my personal jean jacket into a couture piece.</p>
            <div class="blockquote undefined">
              <p>
                &#x201C;And thank you for turning my personal jean jacket into a couture piece.&#x201D;
              </p>
              <small>
                Kanye West, Producer.
              </small>
            </div>
          </div>
          <div class="section col-md-10 ml-auto mr-auto">
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
          </div>
        </div>
      </div> 
    </div>
  </div>

<?php require_once ('footer.php'); ?>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async="" defer="" src="assets/js/buttons.js"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async="" defer="" src="assets/js/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.min.js?v=2.2.0" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      materialKitDemo.presentationAnimations();
    });
  </script>
</body>

</html>
