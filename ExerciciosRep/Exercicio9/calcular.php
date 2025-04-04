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
    $intervalo = $_POST["intervalo"];

    for ($i = 0; $i <=$n1 ; $i += $intervalo)
   echo "<li>$i</li>";
    
    ?>
</body>
</html>