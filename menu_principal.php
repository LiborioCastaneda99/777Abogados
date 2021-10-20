<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php">
            <b>777ABOGADOS</b> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="quienes_somos.php" class="nav-link">
                <i class="material-icons">people_alt</i> Quienes Somos
                </a>
            </li>
            <li class="dropdown nav-item">
                <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="material-icons">apps</i> Áreas Practicas
                </a>
                <div class="dropdown-menu dropdown-with-icons" style="overflow: auto; height: 400px;">
                <?php 
				while ($row=mysqli_fetch_row($areasPracticas)) {
					?>
                        <a href="blog-post.php?id=<?php echo $row[0];?>" class="dropdown-item">
                            <i class="material-icons">line_style</i> <?php echo $row[1]; ?>
                        </a>
					<?php 
				}
				?>
                </div>
            </li>
            <li class="nav-item">
                <a href="valores.php" class="nav-link">
                <i class="material-icons">military_tech</i> Valores
                </a>
            </li>
            <li class="button-container nav-item iframe-extern">
                <a href="contacto.php" class="btn  btn-rose   btn-round btn-block">
                <i class="material-icons">contact_mail</i> Contacto
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>