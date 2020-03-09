<?php
function sayHello($name){
$salutation = "$name, estoy en modo relax!";
return $salutation;
}

$server = new SoapServer ("greetings.wsdl");
$server -> addFunction("sayHello");
$server -> handle();


 ?>