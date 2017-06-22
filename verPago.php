<?php 
	$codflujo = $_POST["codflujo"];
	$codproceso = $_POST["codproceso"];
	$usuario = $_POST["ci"];
	$_SESSION["ci"] = $usuario;
	if($_POST["pagMat"])
		$re = "S";
	else
		$re = "N";
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql1 = "select habilitado from estudiante where ci = ".$usuario; 
	$data1 = mysql_query($sql1);
	$existe = 0;
	while($row = mysql_fetch_row($data1)) {
		$existe = 1;
	}
	if ($existe == 1) {
		$sql = "update estudiante set pago = '".$re."' where ci = ".$usuario;
		$data = mysql_query($sql, $link);
		header ("Location: ./Imprimir.php?codflujo=F1&codproceso=P11");
	} else {
		header ("Location: ./fin.php");
	}
 ?>