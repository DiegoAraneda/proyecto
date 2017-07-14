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
    <title>Actualizar</title>


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
</header>




<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>


<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		

		<h2> Administraci&oacute;n de Asignacion registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edicion de Asignacion</h4>
		<div class="row-fluid">
		
		<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM AsigHorario WHERE id=$id";
		$ressql=mysql_query($sql);
		while ($row=mysql_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nom=$row[1];								$eve=$row[2];
		    	$date=$row[3];
		    	$time=$row[4];
		    	
		    }



		?>

		<form action="actualizarasig.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				nombre<br> <input type="text" name="nom" value="<?php echo $nom?>" readonly="readonly"><br>								Evento<br> <input type="text" name="evento" value="<?php echo $eve?>" readonly="readonly"><br>
				Dia<br> <input type="date" name="date" value="<?php echo $date?>"><br>
				Hora<br> <input type="time" name="time" value="<?php echo $time?>"><br>
				
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		





		
		
		</div>

		


		


</div>

	</div>
</div>

<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
 </footer>
</div>

 
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


