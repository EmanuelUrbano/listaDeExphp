<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex13.php" method="post">
        <input type="number" name="n1"><br>
        <input type="number" name="n2"><br>
        <input type="number" name="n3"><br>
        <input type="submit" value="ok">
    </form>
    <?php
        function soma($n1, $n2,$n3){
            $somaBc = 0;
            if ($n2> $n3) {
               $maior =$n2;
               $menor =$n3;
            }else {
                $maior =$n3;
                $menor =$n2;
            }
            for ($i=$menor; $i <= $maior; $i++) { 
                if ($i%$n1 ==0) {
                    $somaBc += $i; 
                }
            }
            return $somaBc;
        }
        echo soma($_POST["n1"],$_POST["n2"],$_POST["n3"]);
    ?>
</body>
</html>