<?php

$numero = $_POST ["valor"];

$texto = "O número " . $numero . " é divisível por ";

if ($numero % 2 == 0)
{
    echo $texto . " 2 <br>";
}
if ($numero % 4 == 0)
{
    echo $texto . " 4 <br>";
}
if ($numero % 5 == 0)
{
    echo $texto . " 5 <br>";
}

if( ($numero % 2 != 0) && ($numero % 4 != 0) && ($numero % 5 != 0))
{
    echo "O número " . $numero . " não é divisível por 2, 4 ou 5";
}

?>