﻿<?php
error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				
				mysql_query("INSERT INTO login VALUES('','$realname','$pass','$mail','')");
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>