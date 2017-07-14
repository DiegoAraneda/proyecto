Back (accesskey b)    Save (accesskey s)    	File: /public_html/grafico.php
 	Status: This file could not be saved

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grafico</title>
    

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
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="adminu.php">ADMINISTRADOR USUARIO</a></li>
			 
	
		</ul>
              
              <ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DE EVENTO</a></li>
			 
	
		</ul>
<ul class="nav">
			<li class=""><a href="asginacion.php">ASIGNACION</a></li>
			 
	
		</ul>
		<ul class="nav">
			<li class=""><a href="adminasig.php">ADMINISTRADOR ASIGNACION</a></li>
			 
	
		</ul>

<ul class="nav">
			<li class=""><a href="grafico.php">GRAFICO</a></li>
			 
	
		</ul>

		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar sesi&oacute;n </a></li>			 
		</ul>
	  </div>
	</div>
  </div
</div>

<?php 
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

	require("connect_db.php");

	$meses = array('','Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sept','Oct','Nov','Dic');
	for($x=1;$x<=12;$x=$x+1){
		$hora[$x]=0;		
	}
	
	$anno=date('Y');
	
	$sql=mysql_query("SELECT * FROM AsigHorario");
	while($row=mysql_fetch_array($sql)){
		$y=date("Y", strtotime($row['date']));
		
		$mes=(int)date("m", strtotime($row['date'])); 
		
		if($y==$anno){
			$hora[$mes]=$hora[$mes]+$row['time'];
		}
	}
?>

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
      ['Mes', 'Hora'],
		  <?php
		  	for($x=1;$x<=12;$x=$x+1){	
		  ?>
          ['<?php echo $meses[$x]; ?>',<?php echo $hora[$x] ?>],
		  <?php } ?>
        ]);
        var options = {
          chart: {
            title: 'GRAFICO DE ASIGNACION',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
<h2>IMPRIMIR</h2>
<td width=80 align=center><p class="btn btn-danger"><a href="http://rmseguridad.esy.es/reporte.php">PERSONAL</a></p></td>
			</tr></tr></table>

<td width=80 align=center><p class="btn btn-danger"><a href="http://rmseguridad.esy.es/reporte2.php">ASIGNACION</a></p></td>
			</tr></tr></table>



</br>
  </head>
  <body>
    <div id="columnchart_material" style="width: 98%; height: 500px;"></div>
  </body>
</html>
