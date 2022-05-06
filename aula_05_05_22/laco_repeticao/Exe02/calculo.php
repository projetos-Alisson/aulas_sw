<?php
    $n = $_POST['n1'];

    //echo $n;
    $cubo = pow($n,3);
    //echo $cubo;
    for($cont=$n;$cont<=$cubo;$cont++){
        if($cont%2==1){
            echo "$cont <br>";
        }
    }

?>