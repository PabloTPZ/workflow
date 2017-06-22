<?php 
	$codflujo = $_POST["codflujo"];
	$codproceso = $_POST["codproceso"];
	$ci = $_POST["ci"];
	$_SESSION["ci"] = $ci; 
	$nombre = $_POST["nombre"];
	$modalidad = $_POST["modalidad"];
	$carrera = $_POST["carrera"];
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "insert into estudiante (ci, nombre, modalidad, carrera, habilitado) values (".$ci.", '".$nombre."', '".$modalidad."', '".$carrera."', 'N')";
	$data = mysql_query($sql, $link);
	header ("Location: ./fin.php");
 ?>