<?php
   session_start();
   
   if($_SESSION['logado'] != 1){
      header("Location: index.html");
   }


     //SE O HTML (OU QUALQUER OUTRA COISA) FOR ESCRITO ANTES DA PARTE LÓGICA DO PHP
     //NÃO IRÁ APARECER O CONTEÚDO.
     echo "PÁGINA PROTEGIDA, CONFIA. DESEJA ";
     echo "<a href='logout.php'> SAIR?</a>";
    



?>

