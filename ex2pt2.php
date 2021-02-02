<?php
    $v = array($_POST["m1"],$_POST["m2"],$_POST["m3"],$_POST["m4"],$_POST["m5"],$_POST["m6"],$_POST["m7"]);
    $maior = $v[0];
    $menor = $v[0];
    $i = 0;
    do {
        if ($maior<$v[$i]) {
            $maior =$v[$i];
        }
        if ($menor>$v[$i]) {
            $menor =$v[$i];
        }
        $i++;
    } while ($i<7);
    echo "Maior".$maior."<br>Menor média:".$menor;
?>