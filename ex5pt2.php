<?php
    for ($i=0; $i < $_POST["n"]; $i++) {
        $divP = 0;
        if ($_POST["n"] > 0) {
           $an = $_POST["n"]- $i;
           for ($j=0; $j < $an; $j++) { 
               $m = $an-$j;
               if ($an > 0) {
                    if ($an%$m==0) {
                        $divP++;
                    }
               }
           }
           if ($divP ==2) {
               echo $j."<br>";
           }
        }
    }
?>