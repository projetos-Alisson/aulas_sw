<?php


//$numeros = array (1,12,50,1.2);
$numeros = [1,12,50,1.2];
//echo $numeros[2];
$qtde = count($numeros);
echo "Meu vetor tem: $qtde de posições <hr>";

$total = 0;

for($i=0; $i<4; $i++){
   echo "Indice = $i ==> $numeros[$i] <br>";
   $total += $numeros[$i];
   echo "Soma parcial é $total<br>";
}
echo "<hr>";
echo "Soma total é $total<br>";
$media = $total/$qtde;
echo "A <strong> média</strong> é $media";

?>