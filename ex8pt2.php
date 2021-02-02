<?php
    $arr = array();
    $v = array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],$_POST["n11"],$_POST["n12"],$_POST["n13"],$_POST["n14"],$_POST["n15"]);
    echo " o numero trinta apareceu nas posições <br>";
    for ($i=0; $i < 15; $i++) { 
        if($v[$i] == 30){
            echo "-" .$i;
        }
    }
?>