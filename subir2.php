<?php 
	$codflujo = $_POST["codflujo"];
	$codproceso = $_POST["codproceso"];
	$direccion = $_POST["direccion"];
	$sexo = $_POST["sexo"];
	$ue = $_POST["ue"];
	$fecnac = $_POST["fecnac"];
	$municipio = $_POST["municipio"];
	$departamento = $_POST["departamento"];
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "update estudiante set direccion = '".$direccion."', sexo = '".$sexo."', unidad_educativa ='".$ue."', municipio = '".$municipio."', fec_Nac = ".$fecnac."', departamento = '".$departamento."' where ci = ".$_SESSION["usuario"];
	$data = mysql_query($sql, $link);
	header ("Location: ./fin.php");
 ?>