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
</head>

<body class="presentation-page sidebar-collapse">
  
    <?php require_once ('menu_principal.php'); ?>
    <?php require_once ('btn-whatsapp.php'); ?>

    <div class="section-image" data-parallax="true" style="background-image: url('assets/img/img_contacto.jpeg');">
        <div class="">
            <div class="cd-section" id="contactus">
                <div class="contactus-1"> <br><br><br>
                    <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                        <h2 class="title">Ponerse en contacto</h2>
                        <h5 class="description">¿Necesitas más información? Compruebe lo que otras personas están diciendo sobre nuestro producto. Están muy contentos con su compra.</h5>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                            <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                            <h4 class="info-title">Encuéntranos en la oficina</h4>
                            <p> Bld Mihail Kogalniceanu, nr. 8,
                                <br> 7652 Bucharest,
                                <br> Romania
                            </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                            <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                            <h4 class="info-title">Puedes llamarnos</h4>
                            <p> Michael Jordan
                                <br> +40 762 321 762
                                <br> Mon - Fri, 8:00-22:00
                            </p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-5 ml-auto">
                        <div class="card card-contact">
                            <form id="contact-form" method="POST">
                            <div class="card-header card-header-raised card-header-primary text-center">
                                <h4 class="card-title">Contacta con nosotros</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                    <label class="bmd-label-floating">Nombres</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control">
                                    <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                    <label class="bmd-label-floating">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                                    <span class="material-input"></span>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group label-floating is-empty">
                                <label class="bmd-label-floating">Dirección de correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating is-empty">
                                <label for="exampleMessage1" class="bmd-label-floating">Tú mensaje</label>
                                <textarea name="mensaje" id="mensaje" class="form-control" id="exampleMessage1" rows="6"></textarea>
                                <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="card-footer justify-content-between">
                                <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="requerido" type="checkbox"> Acepto los terminos.
                                    <span class="form-check-sign">
                                    <span class="check"></span>
                                    </span>
                                </label>
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Enviar mensaje</button>
                            </div>
                            </form>
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
<script>
    $(document).ready(function(e){
		$("#contact-form").on('submit', function(e){
			e.preventDefault();
		
			var nombres = document.getElementsByName("nombres")[0].value;
			var apellidos = document.getElementsByName("apellidos")[0].value;
			var email = document.getElementsByName("email")[0].value;
			var mensaje = document.getElementsByName("mensaje")[0].value;
			var requerido = document.getElementsByName("requerido")[0].value;

			if ((nombres == "")|| (apellidos == "")|| (email == "") || (mensaje == "")) { 
				Swal.fire({
				icon: 'error',
				text: 'Por favor revisar, hay campos vacidos.',
				showConfirmButton: false,
				timer: 1500
				})
			}else{
				$.ajax({
				type: 'POST',
				url: 'procesos/guardarDatosContactos.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
					success:function(r){
						if(r==1){
                            $.ajax({
								type: "POST",
								dataType: "json",
								url: 'procesos/ejecutarWhatsApp.php',
							});
                            $('#contact-form')[0].reset();
                            Swal.fire(
							'Correcto!',
							'Su información se ha registrado correctamente, en breve nos pondremos en contacto con usted!',
							'success'
							);
						}else{
							Swal.fire(
							'Error!',
							'No se ha podido enviar sus datos correctamente!',
							'error'
							);
						}
					}
				});
			}
		});
    });
</script>