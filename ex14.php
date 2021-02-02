<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex14.php" method="post">
        <input type="number" name="n">
        <input type="submit" value="ok">
    </form>
    <?php
        function converter($s){
            $horas = floor($s/3600);
            $m = floor($s/60);
            $s = floor($s%60);
            return sprintf('%02d:%02d:%02d',$horas, $m, $s);
        }
        echo converter($_POST["n"]);
        converter($_POST["n"]);
    ?>
</body>
</html>