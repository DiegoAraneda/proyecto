<?php
	
	$mysqli=new mysqli("mysql.hostinger.es","u665342916_diego","~n[,4S)bZ3R@","u665342916_rm"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_error()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>