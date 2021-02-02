<?php
    $tant = 0;
    $bv = array($_POST["bv1"],$_POST["bv2"],$_POST["bv3"],$_POST["bv4"],$_POST["bv5"],$_POST["bv6"],$_POST["bv7"]);
    $m = array($_POST["m1"],$_POST["m2"],$_POST["m3"],$_POST["m4"],$_POST["m5"],$_POST["m6"],$_POST["m7"]);
    $maior = 0;
    $bvM;
    for ($i=0; $i < 7; $i++) { 
        if ($maior<$m[$i]) {
            $maior = $m[$i];
            $bvM = $bv[$i];
        }
        if ($m[$i]<7) {
            $tant =(5-($m[$i]/2))*2;
            echo " o ".$bv[$i]." precisa tirar ".$tant." no exame para ser aprovado <br>"; 
        }
    }
   
   echo "o bv é ".$bvM." do aluno com maior média";
?>