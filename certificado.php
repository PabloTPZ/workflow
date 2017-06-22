<?php 
$codflujo = $_GET["codflujo"];
$codproceso = $_GET["codproceso"];
$link = mysql_connect("localhost","prueba","123456"); mysql_select_db("workflow");
$sql = "select sigla, materia, nota from notas natural join materia";
$data=mysql_query($sql,$link);
echo "<table>";
echo "<tr>";
echo "<td>";
echo "SIGLA";
echo "</td>";
echo "<td>";
echo "MATERIA";
echo "</td>";
echo "<td>";
echo "NOTA";
echo "</td>";
echo "</tr>";
while($row = mysql_fetch_row($data)) {
	echo "<tr>";
	echo "<td>";
	echo $row[0];
	echo "</td>";
	echo "<td>";
	echo $row[1];
	echo "</td>";
	echo "<td>";
	echo $row[2];
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
?>
<form action="flujo2.php">
	<input type="hidden" name="codflujo" value="<?php echo $codflujo;?>"/>
	<input type="hidden" name="codproceso" value="<?php echo $codproceso;?>"/>
	<input type="submit" name="ok" value="registrar">
</form>