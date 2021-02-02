<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex12.php" method="post">
        <input type="number" name="n1"><br>
        <input type="number" name="n2"><br>
        <input type="submit" value="ok">
    </form>
    <?php
        function somaN($n1,$n2){
            $n1S = 0;
            $n2S = 0;
            for ($i=0; $i <= $n1 ; $i++) { 
                $n1S += $i;
            } 
            for ($i=0; $i <= $n2 ; $i++) { 
                $n2S += $i;
            }
            return $n1S+$n2S;
        }
        echo somaN($_POST["n1"],$_POST["n2"]);
    ?>
</body>
</html>