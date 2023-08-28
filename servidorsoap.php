<?php

class calculadora{
    public function suma($valor1,$valor2)
    {
        return $valor1+$valor2;
    }
    public function resta($valor1,$valor2)
    {
        return $valor1-$valor2;
    }
    public function multiplicacion($valor1,$valor2)
    {
        return $valor1*$valor2;
    }
    public function division($valor1,$valor2)
    {
        return $valor1/$valor2;
    }

}
$options= array('uri'=>'http://localhost/calculadora');
$server=new SoapServer('calculadorawsdl.wsdl',$options);
$server->setClass('calculadora');
$server->handle();

?>