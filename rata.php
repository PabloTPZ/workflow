<?php 
	$codflujo = $_POST["codflujo"];
	$codproceso = $_POST["codproceso"];
	$usuario = $_POST["ci1"];
	$_SESSION["ci"] = $usuario;
	if($_POST["ci"])
		$ci = "S";
	else
		$ci = "N";
	if($_POST["cerNotas"])
		$cn = "S";
	else
		$cn = "N";
	if($_POST["regEst"])
		$re = "S";
	else
		$re = "N";
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "update estudiante set carnet = '".$ci."', certNotas = '".$cn."', regEst='".$re."' where ci = ".$usuario;
	$data = mysql_query($sql, $link);
	header ("Location: ./flujo2.php?codflujo=".$codflujo."&codproceso=".$codproceso);
 ?>