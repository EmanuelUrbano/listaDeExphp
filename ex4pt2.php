<?php
    $divP = 0;
    $n=$_POST["n"];
    $a = 0;
    for ($i=0; $i < $n; $i++) {
        $a = $n -$i; 
        if ($n>1) {
            if ($n%$a==0) {
                $divP++;
            }
        }
    }
    echo $divP == 2?"é primo":"não é primo";


?>