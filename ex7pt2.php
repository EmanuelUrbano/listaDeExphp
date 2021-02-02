<?php
    $K = 0;
    $l = 0;
    $N = 0;
    $md = array();
    $mt = array();
    $mdt = array();
    $v = array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"]);
    for ($i=0; $i < 7; $i++) { 
        if ($v[$i]%2 == 0) {
            $md[$K]=$v[$i];
            $mdt[$N]=$v[$i];

            $K++; 
            $N++;
        }
        if($v[$i]%3 == 0){
            $mt[$l] = $v[$i];
            $mdt[$N]=$v[$i];

            $l++;
            $N++;
        }
    }
    echo "multiplos de dois ";
   for ($i=0; $i < count($md); $i++) { 
      echo " - ".$md[$i];
   }
   echo "<br>";
   echo "multiplos de tres ";
   for ($i=0; $i < count($mt); $i++) { 
        echo " - ".$mt[$i];
    }
    echo "<br>";
    echo "multiplos de tres e dois ";
    for ($i=0; $i < count($mdt); $i++) { 
        echo " - ".$mdt[$i];
    }
    echo "<br>";
?>