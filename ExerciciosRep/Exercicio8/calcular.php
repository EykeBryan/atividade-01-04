<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = $_POST["n1"];

    for ($i = 1; $i <= 10; $i ++) {
        $resultado = $n1 * $i;
        echo "<li>$n1 X $i = $resultado</li>";
    }
    
    ?>
</body>
</html>