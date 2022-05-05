<?php

$numero = $_POST['num'];
//echo $numero;
$cubo = pow($numero,3);
//pseudovariável. Ex: $_COOKIE; $_GET; $_REQUEST

for($cont=$numero;$cont<=$cubo;$cont++){
    echo "$cont <br>";
   // echo "<br>";
}




?>