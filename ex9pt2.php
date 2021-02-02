<?php
$neg = 0;
$posi = 0;
    $v = array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"]);
    for ($i=0; $i < 10; $i++) { 
        if ($v[$i] < 0) {
            $neg++;
        } else{
            $posi += $v[$i];
        }
    }
    echo "quantidade de negativos ".$neg."<br> soma positivos ".$posi;
?>