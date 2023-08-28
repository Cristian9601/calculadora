<?php 
$options= array(
	'location' 	=>	'http://localhost/calculadora/servidorsoap.php',
	'uri'		=>	'http://localhost:90/calculadora/servidorsoap.php',
  );
  $client=new SoapClient(NULL,$options);
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($client->suma($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($client->resta($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($client->multiplicacion($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($client->division($_POST ["valor1"],$_POST ["valor2"]));
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa algun valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?> 