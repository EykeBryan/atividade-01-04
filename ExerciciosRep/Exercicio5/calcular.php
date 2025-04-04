<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $texto = $_POST["texto"];
    $repeticoes = $_POST["repeticoes"];

    for ($i = 0; $i < $repeticoes; $i ++)
   echo "$texto<br>";
    
    ?>
</body>
</html>