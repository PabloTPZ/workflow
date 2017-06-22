<?php  
	$codflujo = $_GET["codflujo"];
	$codproceso = $_GET["codproceso"];
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "select ci from estudiante where carnet = 'S' and regEst = 'S' and certNotas='S'";
	$data = mysql_query($sql, $link);
	$existe = 0;
	while($row = mysql_fetch_row($data)) {
		$existe = 1;
	}
	if ($existe == 1) {
		header ("Location: ./HabEstudiante.php?codflujo=F1&codproceso=P8");
	} else {
		header ("Location: ./fin.php");
	}
 ?>