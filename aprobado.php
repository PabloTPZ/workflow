<?php 
	$codflujo = $_GET["codflujo"];
	$codproceso = $_GET["codproceso"];
	$ci = $_SESSION["usuario"];
	$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
	$sql = "select sigla, nota from notas where ci = '".$ci."'";
	$data = mysql_query($sql, $link);
	$data2 = 0;
	$data1 = 0;
	while($row = mysql_fetch_row($data)) {
		if ($row[1] >= 51) {
			$data1 = $data1 + 1;
		}
		$data2 = $data2 + 1;
	}
	
	if ($data1 > 0 && $data1 == $data2){
		header ("Location: ./certificado.php?codflujo=F1&codproceso=P4");
	} else {
		header ("Location: ./fin.php");
	}
 ?>