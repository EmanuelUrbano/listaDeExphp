<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex15.php" method="post">
        altur<input type="number" name="alt"><br>
        Masculino<input type="radio" name="m"><br>
        Feminino <input type="radio" name="f"><br>
        <input type="submit" value="ok">
    </form>
    <?php
        function pesI($alt,$sexoM,$sexoF){
            $pedeal = 0;
            if (isset($_POST["m"])) {
                $pedeal = 72.7*$alt - 58;
            }
            if (isset($_POST["f"])) {
                $pedeal = 62.1 *$alt - 44.7;
            }
            return $pedeal;
        }
        echo ("o seu peso ideal seria ");
        echo pesI($_POST["alt"],$_POST["m"],$_POST["f"]);
    ?>
</body>
</html>