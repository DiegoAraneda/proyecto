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
    <title>Empresa</title>
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
        <h2>Nuestra Empresa</h2>
				<p>RM-31 Seguridad E.I.R.L., nace en febrero del a&ntilde;o 2003 con el firme prop&oacute;sito de consolidarse, dentro del &aacutembito de la seguridad. En todos estos a&ntilde;os su desarrollo ha sido sostenido, consiguiendo posicionarse como la empresa l&iacure;der en seguridad. Principalmente en las &aacute;reas Comercial, Industrial, Forestal y Mar&iacute;tima que operan en la VIII regi&oacute;n. Un selecto grupo humano con firme vocaci&oacute;n y un compromiso real hacia nuestros clientes, han sido factores fundamentales para conseguir este liderazgo. Nuestra fortaleza radica en ofrecer precios ajustados y acordes a la posibilidad de nuestros clientes los cuales hoy en d&iacute;a podr&aacute;n contar con los servicio de una empresa especializada, que responder&aacute; con m&aacute;xima precisi&ocute;n a sus demandas.</p>
			 </div>    
			     <div id="page">
   </div>  
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