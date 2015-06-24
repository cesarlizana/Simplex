<?php
		$conn=mysql_connect("localhost","root","root"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("simplex",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}