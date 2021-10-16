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
                                                <i class="material-icons">balance</i> Responsabilidad
                                            </h3>
                                            <p class="card-description text-center" style="font-size:18px;">
                                            La responsabilidad es frente nosotros mismos, a nuestros clientes, a la comunidad en general, por ende ejercemos nuestro trabajo con vocación y pasión para responder a la altura de la gestión encomendada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain card-blog" style="margin-bottom: -10px; margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h3 class="card-title text-center">
                                                <i class="material-icons">balance</i> Ética, lealtad y honestidad
                                            </h3>
                                            <p class="card-description text-center" style="font-size:18px;">
                                                Este bufete de abogados, siempre lucha y combate de manera frontal cualquier práctica que atente a la ética y la deontología de esta profesión. Tenemos como sagrado el secreto profesional. <br>
                                                Queremos que se depure la concepción de abogacía, y que se triunfe con el conocimiento, con las destrezas jurídicas, no con trampa, deshonestidad y corrupción.
                                            </p>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                            <img class="img img-raised" src="data:image/jpeg;base64,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">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                            <i class="material-icons">balance</i> Responsabilidad
                                        </h3>
                                        <p class="card-description text-center" style="font-size:18px;">
                                        La responsabilidad es frente nosotros mismos, a nuestros clientes, a la comunidad en general, por ende ejercemos nuestro trabajo con vocación y pasión para responder a la altura de la gestión encomendada.
                                        </p>
                                    </div>
                                    </div>
                                </div>
                                <div class="card card-plain card-blog" style="margin-bottom: -10px; margin-top: 20px;">
                                    <div class="row">
                                    <div class="col-md-7">
                                            <h3 class="card-title text-center">
                                            <i class="material-icons">balance</i> Ética, lealtad y honestidad
                                        </h3>
                                        <p class="card-description text-center" style="font-size:18px;">
                                            Este bufete de abogados, siempre lucha y combate de manera frontal cualquier práctica que atente a la ética y la deontología de esta profesión. Tenemos como sagrado el secreto profesional. <br>
                                            Queremos que se depure la concepción de abogacía, y que se triunfe con el conocimiento, con las destrezas jurídicas, no con trampa, deshonestidad y corrupción.
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                        <img class="img img-raised" src="data:image/jpeg;base64,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">
                                        </div>
                                    </div>
                                    </div>
                                </div>
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
