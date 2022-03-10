<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <style>
   
     body{background: lightblue;}
     echo{color: white;}

   </style>



</head>
<body>
<?php

//$num1 = 5;
//$num2 = 10;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$soma = $num1 + $num2;

//echo "A soma de: ".$num1. "+" .$num2. " será igual: ".$soma;
echo "<h1>A soma de $num1 + $num2 será igual: $soma</h1>";

?>

</body>
</html>
