<?php
require 'nusoap.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>CALCULADORA</title>
</head>
<body>
    <h2>CALCULADORA</h2>
    <form method="POST" action="resultado.php">
        Número 1: <input type="text" name="num1"><br>
        Número 2: <input type="text" name="num2"><br>
        Operación (+, -, *, /): <input type="text" name="operacion"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
