<?php
    $contP =0;
    $contI =0;
    $v = array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"]);
    echo "Pares";
    for ($i=0; $i < 6; $i++) { 
        if ($v[$i]%2 == 0) {
            echo " - ".$v[$i];
            $contP++;
        }
    } 
    echo "<br> existe ".$contP." pares <br>impares";
    for ($i=0; $i < 6; $i++) { 
        if($v[$i]%2 != 0){
            echo " - ".$v[$i];
            $contI++;
        }
    }
    echo "<br> existe ".$contI." impares";
?>