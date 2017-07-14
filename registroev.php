<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);


	$nombre=$_POST['nombre'];
	$hora=$_POST['hora'];
	$horater=$_POST['horater'];
	$fecha= $_POST['fecha'];
	

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM  WHERE nombre='$nombre'");
	
		
				
			mysql_query("INSERT INTO evento VALUES('','$nombre','$hora','$horater','$fecha')");
				
				
				mysql_close($link);

	
?>
