<?php
    for ($i=0; $i < $_POST["n"]; $i++) { 
       echo $i%2==0?"Par ".$i."<br>":"impar  ".$i."<br>";
    }
    
?>