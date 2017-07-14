<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Prototipo Pagina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Diego Araneda">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  
<?php

include("include/menu.php");

?>


<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
                       <img src="images/galeria/empresa/001.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Proximamente</h4>
				 
			</div>
		  </div>
		  <div class="item">
                      <img src="images/galeria/empresa/002.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>proximamente</h4>
				  
			</div>
		  </div>
		  <div class="item">
                      <img src="images/galeria/empresa/003.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>proximamente</h4>
				  
			</div>
		  </div>
		  <div class="item">
                      <img src="images/galeria/empresa/004.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>proximamente</h4>
				  
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		   <div>
              <h2>MISI&Oacute;N</h2>
				<p>La misión de RM-31 es prestar un servicio de seguridad cumpliendo a cabalidad los estándares de calidad y consolidarnos como una corporación confiable y eficiente, satisfaciendo fielmente las necesidades de nuestros clientes y contribuyendo al bienestar de todos los que en ella colaboren.</p>
			</br>
			<h2>VISI&Oacute;N</h2>
			<p>Brindar servicios de seguridad privada con el profesionalismo y calidad que nos identifiquen y sean la base de nuestro negocio. Garantizando un excelente desempeño en operaciones de seguridad con eficiencia, disciplina y honestidad a completa satisfacción de nuestros clientes, lo cual hará que nos mantengamos en el tiempo, conservando nuestro prestigio.</p>
     

</div>

<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
 </footer>
</div><!-- /container -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>