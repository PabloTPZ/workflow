<?php 
//if (!isset($_SESSION["usuario"]))
	$_SESSION["usuario"]=$_POST["user"];
//if (!isset($_SESSION["clave"]))
	$_SESSION["clave"]=$_POST["pass"];
$usuario=$_SESSION["usuario"];
$clave=$_SESSION["clave"];
$link = mysql_connect("localhost","prueba","123456"); 
mysql_select_db("workflow");
$sql = "select * from usuario where usuario = '".$usuario."' and clave = '".$clave."' union select ci, password, 'E' from estudiante where ci = '".$usuario."' and password = '".$clave."'";
$data = mysql_query($sql, $link);
$row = mysql_fetch_row($data);
echo $row[2];
if ($row[2] == 'A') {
	header ("Location: ./flujo2.php?codflujo=F2&codproceso=P1");
}
if($row[2] == 'E') {
	header ("Location: ./flujo2.php?codflujo=F1&codproceso=P13");	
} 
if($row[2] == 'K') {
	header ("Location: ./flujo2.php?codflujo=F1&codproceso=P5");	
} 
if($row[2] == 'G') {
	header ("Location: ./flujo2.php?codflujo=F1&codproceso=P8");	
}
?>