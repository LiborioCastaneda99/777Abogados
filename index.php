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
  
  <?php require_once ('btn-whatsapp.php'); ?>

    <!-- Carousel Card -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="page-header header-filter" style="background-image: url('assets/img/img_official.jpeg');">
            <div class="container">
              <div class="row">
                <!-- <div class="col-md-6 text-left">
                  <h1 class="title">Material Kit PRO</h1>
                  <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                  <br>
                  <div class="buttons">
                    <a href="#pablo" class="btn btn-danger btn-lg">
                      Read More
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link">
                      <i class="fa fa-get-pocket"></i>
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="page-header header-filter" style="background-image: url('assets/img/Slider_1.png');">
            <div class="container">
              <div class="row">
                <!-- <div class="col-md-8 ml-auto mr-auto text-center">
                  <h1 class="title">Material Kit PRO</h1>
                  <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                  <br>
                  <h6>Connect with us on:</h6>
                  <div class="buttons">
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link btn-lg">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link btn-lg">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link btn-lg">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a href="#pablo" class="btn btn-just-icon btn-white btn-link btn-lg">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="page-header header-filter" style="background-image: url('assets/img/dg3.jpg');">
            <div class="container">
              <div class="row">
                <!-- <div class="col-md-7 ml-auto text-right">
                  <h1 class="title">New Collection 50% Off</h1>
                  <h4>There&apos;s no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?</h4>
                  <br>
                  <div class="buttons">
                    <a href="#pablo" class="btn btn-white btn-link btn-lg">
                      <i class="material-icons">share</i> Share Offer
                    </a>
                    <a href="#pablo" class="btn btn-danger btn-lg">
                      <i class="material-icons">shopping_cart</i> Shop Now
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="material-icons">keyboard_arrow_left</i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="material-icons">keyboard_arrow_right</i>
        <span class="sr-only">Next</span>
      </a>
    </div>

<!-- 
    <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/Slider_1.png');">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            
          </div>
        </div>
      </div>
    </div> -->
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
      </div>
    </div>
  </div>   

    <?php require_once ('footer.php'); ?>
    
    <?php require_once ('scritps.php'); ?>
  
</body>

</html>
