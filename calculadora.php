
<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora PHP</title>
	</head>
	<body>
		<h1>Calculadora</h1>
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer numero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo numero:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>