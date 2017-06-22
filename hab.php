<?php 
	$codflujo = $_POST["codflujo"];
	$codproceso = $_POST["codproceso"];
	$usuario = $_SESSION["ci"];
	if($_POST["hab"])
		$re = "S";
	else
		$re = "N";
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "update estudiante set habilitado = '".$re."' where ci = ".$usuario;
	$data = mysql_query($sql, $link);
	header ("Location: ./fin.php");
 ?>