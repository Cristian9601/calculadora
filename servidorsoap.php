<?php
require "nusoap.php";
class Calculadora {
    public function calcular($num1, $num2, $operacion) {
        switch ($operacion) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                return $num1 / $num2;
            default:
                return "Operación no válida";
        }
    }
}
$server = new nusoap_server();
$server->configureWSDL("Soap Demo","urn:soapdemo");
$server->register(
    "Calculadora.calcular",
    array("numero1"=> "xsd:float","numero2"=>"xsd:float","operacion"=>"xsd:string"),
    array("return"=>"xsd:float")
);
$server->service(file_get_contents("php://input"))
?>

