<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);


extract($_POST);	
	require("connect_db.php");
	$sentencia="update AsigHorario set nom='$nom', evento='$eve' date='$date', time='$time' where id='$id'";
	$resent=mysql_query($sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: adminasig.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='adminasig.php'</script>";

		
	}
?>