<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'ALISSON';
    $pass = '1234';


    if(($usuario == $user) && ($senha == $pass)){
      //echo "OK validado";
      session_start();
      $_SESSION['username'] = $usuario;
      $_SESSION['logado'] = 1;

      //SE OS DADOS ESTIVEREM CORRETOS, O USUÁRIO
      //SERÁ DIRECIONADO PARA PÁGINA "restrincao.php"
      header("Location: restrincao.php");

    }else{
      echo "Error";
    }
    

?>