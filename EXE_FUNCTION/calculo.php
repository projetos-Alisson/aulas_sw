<?php
  $op = $_POST['option'];
  $temp = $_POST['number'];
  
  if($op==1)
   echo "Temperatura em Farenheit: ".CtoF($temp)." °F";
  elseif($op==2)
   echo "Temperatura em Celsius: ".FtoC($temp)." °C";
  else
   echo "Opção inválida";
   
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
 ?>