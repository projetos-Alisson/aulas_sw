<?php 
    $estado = "SP";

    switch($estado){
        case "SP":
          echo " São Paulo";
            break;  //SEM O BREAK, O ALGORITMO EXECUTA TODOS DE UMA VEZ

        case "RJ":
           echo " Rio de Janeiro";
            break;

        default:
             echo " Sigla não encontrada";


    }
        
?>