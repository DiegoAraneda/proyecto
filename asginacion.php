<!DOCTYPE html>
<html lang="en">
<?php
							session_start();
							if (@!$_SESSION['user']) {
							header("Location:index.php");
							}
							?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Administrador</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Rm <span class="lite">Seguridad</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">
							<strong><?php echo $_SESSION['user'];?></strong> 
							</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                              
                            <li>
                                <a href="desconectar.php"><i class="icon_key_alt"></i> Salir</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentacion</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentacion</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Administracion</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="adminu.php">USUARIO</a></li>                          
                          <li><a class="" href="admin.php">EVENTO</a></a></li>
						  <li><a class="" href="adminasig.php">ASIGNACION</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Procesos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class=""><a href="asginacion.php">ASIGNAR</a></li>
                      </ul>
                  </li>
                  
                  <li>                     
                      <a class="" href="grafico.php">
                          <i class="icon_piechart"></i>
                          <span>GRAFICOS</span>
                          
                      </a>
                                         
                  </li>
                             
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>IMPRIMIR</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="reporte.php">TRABAJADORES</a></li>
                          <li><a class="" href="reporte2.php"><span>ASIGNACION</span></a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
	  </div>
	</div>
  </div>
</div>
  
	
	
		
	<div class="span12">

		<div class="caption">
		

			 <center><div class="tit"><h2>Registro Asignacion de Horario</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		</table>
		</form>
</br>
    <form method="post" action="" >
  <fieldset>
  
 <div class="form-group">
<label style="font-size: 14pt"><b>Ingresa Nombre</b></label>
<SELECT name="nombox">
<option>Seleccione una Opci&oacute;n...</option>
<?php 
$conexion=mysql_connect("localhost","u665342916_diego","~n[,4S)bZ3R@") or
die("Problemas en la conexion");
mysql_select_db("u665342916_rm",$conexion) or
die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select id,nombre from personal",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['nombre'].'">'.$row['nombre'].'</OPTION>';
}
 
?>
</SELECT>
 </div>
 <div class="form-group">

<label style="font-size: 14pt"><b>Ingresa Evento</b></label>
<SELECT name="evebox">
<option>Seleccione una Opci&oacute;n...</option>
<?php 
$conexion=mysql_connect("localhost","u665342916_diego","~n[,4S)bZ3R@") or
die("Problemas en la conexion");
mysql_select_db("u665342916_rm",$conexion) or
die("Problemas en la selección de la base de datos");  
mysql_query ("SET NAMES 'utf8'");
$clavebuscadah=mysql_query("select idevent,nom from evento",$conexion) or
die("Problemas en el select:".mysql_error());
while($row = mysql_fetch_array($clavebuscadah))
{
echo'<OPTION VALUE="'.$row['nom'].'">'.$row['nom'].'</OPTION>';
}
 
?>
</SELECT>

 </div>
      <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa fecha</b></label>
      <input type="date" name="dia" class="form-control"  required />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese Hora</b></label>
      <input type="time" name="hora" class="form-control" required/>
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
<?php
		if(isset($_POST['submit'])){
			require("registroas.php");
		}
	?>


		




</div>

	</div>
</div>


<div class="row">
	
  
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
   <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
