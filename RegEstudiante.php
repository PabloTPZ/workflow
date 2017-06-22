<!DOCTYPE html>
<html>
<head>
	<title>FCPN</title>
</head>
<body>
	<h1>PROFILE</h1>
	<form method="POST" action="subir2.php">
		<input type="hidden" name="codflujo" value="<?php echo $_GET["codflujo"];?>"/>
		<input type="hidden" name="codproceso" value="<?php echo $_GET["codproceso"];?>"/>
		<label>direccion</label>
		<input type="text" name="direccion">
		<br>
		<label>sexo</label>
		<input type="text" name="sexo">
		<br>
		<label>unidad educativa</label>
		<input type="text" name="ue">
		<br>
		<label>fecha nacimiento</label>
		<input type="date" name="fecnac">
		<br>
		<label>municipio</label>
		<input type="text" name="municipio">
		<br>
		<label>departamento</label>
		<input type="text" name="departamento">
		<br>
		<input type="submit" name="sig" value="Registrar">
	</form>
</body>
</html>