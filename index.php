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
    777ABOGADOS
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
        background: linear-gradient(45deg,rgba(6,6,6,.6),rgba(6,6,6,.6));
        background: -webkit-linear-gradient(135deg,rgba(6,6,6,.6),rgba(6,6,6,.6));
    }
  </style>
</head>

<body class="presentation-page sidebar-collapse">

  <?php require_once ('menu_principal.php'); ?>
  
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/Slider_1.png');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-content" style="padding: 0px 0; margin-top: 0px;">
      <div class="">
        <div class="cd-section" id="teams" style="padding: 0px 0;">
          <div class="team-1" id="team-1" style="padding: 0px 0;">
            <div class="container">
              <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center mt-1" style="padding: 0px 0;" >
                  <h2 class="title">Nuestro Buffet</h2>
                  <h5 class="description" style="margin-bottom: 0px; margin-top: 0px;">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/marc.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Alec Thompson</h4>
                      <h6 class="card-category text-muted">CEO / Co-Founder</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/kendall.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Tania Andrew</h4>
                      <h6 class="card-category text-muted">Designer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/christian.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Christian Mike</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/avatar.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Rebecca Stormvile</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/avatar.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Rebecca Stormvile</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/avatar.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Rebecca Stormvile</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/avatar.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Rebecca Stormvile</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card card-profile card-plain">
                    <div class="card-header card-avatar">
                      <a href="#pablo">
                        <img class="img" src="assets/img/faces/avatar.jpg">
                      </a>
                    </div>
                    <div class="card-body ">
                      <h4 class="card-title">Rebecca Stormvile</h4>
                      <h6 class="card-category text-muted">Web Developer</h6>
                      <p class="card-description">
                        Need to restart the human foundation.
                      </p>
                    </div>
                    <div class="card-footer justify-content-center">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="cd-section" id="testimonials" style="padding: 0px 0;">
      <div class="testimonials-2 section-dark" style="padding: 0px 0;">>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card card-testimonial card-plain">
                        <h2 class="title">Testimonios</h2>
                      <div class="card-body">
                        <h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!!
                          <br>Thank you for letting me work on this masterpiece. One of my favorite people."
                        </h5>
                        <h4 class="card-title">Kendall Thompson</h4>
                        <h6 class="card-category text-muted">CEO @ Marketing Digital Ltd.</h6>
                        <div class="footer">
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card card-testimonial card-plain">
                        <h2 class="title">Testimonios</h2>
                      <div class="card-body">
                        <h5 class="card-description">"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
                        </h5>
                        <h4 class="card-title">Christian Louboutin</h4>
                        <h6 class="card-category text-muted">Designer @ Louboutin &amp; Co.</h6>
                        <div class="footer">
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                          <i class="material-icons text-warning">star</i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="section section-overview" style="padding: 0px 0;">
      <div class="features-5" style="background-image: url('assets/img/features-5.jpg')" style="padding: 0px 0;">
        <div class="col-md-8 ml-auto mr-auto text-center" style="padding: 0px 0;">
          <h2 class="title">Ubicación</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3916.690693008491!2d-74.779256!3d10.986703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4329d405215ab%3A0x20c325a55507547e!2sCl.%2037%20%2346-90%2C%20Barranquilla%2C%20Atl%C3%A1ntico!5e0!3m2!1ses-419!2sco!4v1634181276978!5m2!1ses-419!2sco" width="100%" height="400" style="border:0;border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>

              </div>
            </div>
          </div>
        </div>
        
        <div class="social-line text-center mb-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h4 class="title">Puedes seguirnos!</h4>
                <a href="#pablo" id="twitter" class="btn btn-twitter btn-round">
                  <i class="fa fa-instagram" aria-hidden="true"></i> Instagram
                </a>
                <a href="#pablo" id="facebook" class="btn btn-facebook btn-round">
                  <i class="fa fa-facebook-square"></i> Facebook
                </a>
                <a href="#pablo" id="whatsapp" class="btn btn-google btn-round">
                  <i class="fa fa-whatsapp"></i> WhatsApp
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-testimonials team-3">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Trusted by 330.000+ People</h2>
              <h5 class="description">The UI Kits, Templates and Dashboards that we've created are used by <b>330,000+ web developers</b> in over <b>576.000 Web Projects</b>. This is what some of them think:</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile card-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-header card-header-image">
                      <a href="#pablo">
                        <img class="img" src="assets/img/test1.jpg">
                      </a>
                      <div class="colored-shadow" style="background-image: url(&quot;assets/img/test1.jpg&quot;); opacity: 1;"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h4 class="card-title">Khaldi Yass</h4>
                      <p class="card-description">
                        "As soon as I saw this kit, everything else isn't the same anymore, I just can't describe it guys! Thank you for this work!"
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile card-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-header card-header-image">
                      <a href="#pablo">
                        <img class="img" src="assets/img/test2.jpg">
                      </a>
                      <div class="colored-shadow" style="background-image: url(&quot;assets/img/test2.jpg&quot;); opacity: 1;"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h4 class="card-title">Josh Murray</h4>
                      <p class="card-description">
                        "Great kit! Used this for a client already and he is over the moon. Keep up the good work Creative Tim! 10/10 for design, colours, and the feel of the kit."
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile card-plain">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-header card-header-image">
                      <a href="#pablo">
                        <img class="img" src="assets/img/test3.jpg">
                      </a>
                      <div class="colored-shadow" style="background-image: url(&quot;assets/img/test3.jpg&quot;); opacity: 1;"></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h4 class="card-title">Michael Onubogu</h4>
                      <p class="card-description">
                        "Damn Daniel!!! This Material UI Kit is fresh AF! Amazing work!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="our-clients">
            <div class="row">
              <div class="col-md-3">
                <img src="assets/img/example-pages/vodafone.jpg" alt="">
              </div>
              <div class="col-md-3">
                <img src="assets/img/example-pages/microsoft.jpg" alt="">
              </div>
              <div class="col-md-3">
                <img src="assets/img/example-pages/harvard.jpg" alt="">
              </div>
              <div class="col-md-3">
                <img src="assets/img/example-pages/stanford.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-pricing pricing-5 iframe-extern">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Ready to grab 777Abogados?</h2>
          <div class="nav nav-pills nav-pills-rose">
            <div class="nav-tabs-wrapper">
              <ul class="nav nav-pills" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active show" href="#profile" data-toggle="tab">
                    Personal License
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#messages" data-toggle="tab">
                    Developer License
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="tab-content text-center">
            <div class="tab-pane active show" id="profile">
              <p class="description">
                Good for personal websites, school projects, startups or any other project where your users will not be charged for using it. Create one single website/app for one client.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-pricing card-margin">
                    <div class="card-body">
                      <h6 class="card-category">HTML Package</h6>
                      <h1 class="card-title"><small>$</small>79</h1>
                      <ul>
                        <li><b>HTML/CSS/JS/SASS</b> Files</li>
                        <li><b>Fully Coded</b> Components</li>
                        <li><b>Responsive</b> Design</li>
                        <li>Product<b> Documentation</b></li>
                      </ul>
                      <a href="../../product/material-kit-pro.html?license=1" class="btn btn-rose btn-round">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-pricing">
                    <div class="card-body">
                      <h6 class="card-category">HTML &amp; Photoshop Package</h6>
                      <h1 class="card-title"><small>$</small>139</h1>
                      <ul>
                        <li><b>HTML/CSS/JS/SASS</b> Files</li>
                        <li><b>Fully Coded</b> Components</li>
                        <li><b>Responsive</b> Design</li>
                        <li>Product<b> Documentation</b></li>
                        <li><b>+ Photoshop</b> Files</li>
                        <li><b>+ Components</b> on Layers</li>
                      </ul>
                      <a href="../../product/material-kit-pro.html?license=1&amp;package=3" class="btn btn-rose btn-round">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="messages">
              <p class="description">
                Good for business projects, multiple websites for clients or for creating themes where your users will be charged for using it. Create multiple websites/apps for multiple clients.
              </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-pricing card-margin">
                    <div class="card-body">
                      <h6 class="card-category">HTML Package</h6>
                      <h1 class="card-title"><small>$</small>319</h1>
                      <ul>
                        <li><b>HTML/CSS/JS/SASS</b> Files</li>
                        <li><b>Fully Coded</b> Components</li>
                        <li><b>Responsive</b> Design</li>
                        <li>Product<b> Documentation</b></li>
                      </ul>
                      <a href="../../product/material-kit-pro.html?license=2" class="btn btn-rose btn-round">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-pricing">
                    <div class="card-body">
                      <h6 class="card-category">HTML &amp; Photoshop Package</h6>
                      <h1 class="card-title"><small>$</small>599</h1>
                      <ul>
                        <li><b>HTML/CSS/JS/SASS</b> Files</li>
                        <li><b>Fully Coded</b> Components</li>
                        <li><b>Responsive</b> Design</li>
                        <li>Product<b> Documentation</b></li>
                        <li><b>+ Photoshop</b> Files</li>
                        <li><b>+ Components</b> on Layers</li>
                      </ul>
                      <a href="../../product/material-kit-pro.html?license=2&amp;package=3" class="btn btn-rose btn-round">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 ml-auto mr-auto text-center">
          <p class="description">You have and <b>Premium Support</b> on each package. You also have <b>30 days</b> to request a refund if you&apos;re not happy with your purchase.</p>
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
