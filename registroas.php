<?php

	$nom=$_POST['nombox'];
	$date= $_POST['dia'];
	$time=$_POST['hora'];
	
	

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM  WHERE nom='$nom'");
	
		
				
			mysql_query("INSERT INTO AsigHorario VALUES('','$nom','$date','$time')");
				

				mysql_close($link);

	
?>
