<?php
$client = new SoapClient("greetings.wsdl");
print_r($client->sayHello("Richard Walls Segundo de la Guerra Fria"));

 ?>