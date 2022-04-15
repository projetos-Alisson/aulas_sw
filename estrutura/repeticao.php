<?php 

/*WHILE (ENQUANTO)
DO WHILE (FAZER ENQUANTO)
FOR (PARA) 
FOREACH (PARA CADA)

*/

$n = 0;
$n1 = 0;

echo "<br><h1>Usando o WHILE</h1>";


while ($n <= 10){  /*ENQUANTO $n FOR MENOR QUE 10, REPITA ESSE BLOCO DE CODIGOS ATÉ ESSA CONDIÇÃO SER FALSA */
    echo $n . "<br>";
$n++;
}



do{
    echo "<br><h1>Usando o DO WHILE</h1>" . $n1;  /*FAZ COM QUE ESSE TRECHO SEJA EXECUTADO 1 VEZ*/
} while($n1 <0);

echo "<br><h1>Usando o FOR</h1>" . $n1; /*VAI EXECUTAR A INSTRUÇÃO, ATÉ A CONDIÇÃO SER SATISFEITA  */
for($n = 0; $n <= 10; $n++) {
    echo $n . "<br>";
}

echo "<br><h1>Usando o FOREACH</h1>"; /*LISTA */

$lista_compras = array ("maçã", "carne", "suco", "alface", "arroz", "banana");

foreach($lista_compras as $key => $comida) {
    echo $key . "<br>";
    echo $comida . "<br>";
}

?>