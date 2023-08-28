<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    $client = new SoapClient('http://localhost/calculadora/calculadorawsdl.wsdl');
    
    try {
        $resultado = $client->calcular($num1, $num2, $operacion);
        echo "Resultado: $resultado";
    } catch (SoapFault $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

