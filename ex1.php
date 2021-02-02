<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex1.php" method="post">
        N1<input type="text" name="n1"><br>
        N2<input type="text" name="n2"><br>
        N3<input type="text" name="n3"><br>
        <input type="submit" value="ok">
    </form>
    <?php
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        $i;
        echo "media " .($n1+$n2+$n3)/3;
    ?>
</body>
</html>