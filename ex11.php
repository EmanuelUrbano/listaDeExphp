<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex11.php" method="post">
        <input type="number" name="n">
        <input type="submit" value="ok">
    </form>
    <?php
        function posiOuNegativ($n){
            return $n>=1?1:0;
        }
        echo posiOuNegativ($_POST["n"]);
    ?>
</body>
</html>