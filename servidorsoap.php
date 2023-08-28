<?php
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

$server = new SoapServer('calculadorawsdl.wsdl');
$server->setClass('Calculadora');
$server->handle();
?>

