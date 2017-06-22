<?php  
$codflujo=$_GET["codflujo"];     
$codproceso=$_GET["codproceso"]; 
$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
$sql="select * from flujoproceso where codflujo='".$codflujo."' and codproceso='".$codproceso."'"; 
$data=mysql_query($sql,$link);
$row=mysql_fetch_row($data); 
$codprocesonext=$row["3"];
$sql="select * from flujoproceso where codflujo='".$codflujo."' and codproceso='".$codprocesonext."'";
$data1=mysql_query($sql,$link);
$row1=mysql_fetch_row($data1);
$pagina1=$row1["4"];
header ("Location: http://localhost/proyecto/".$pagina1."?codflujo=".$codflujo."&codproceso=".$codprocesonext);
?>