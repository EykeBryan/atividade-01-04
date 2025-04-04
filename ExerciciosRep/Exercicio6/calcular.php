<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numero = $_POST["numero"];

    for ($i = 0; $i <= $numero; $i += 2) {
        echo "<li>$i</li>";
    }
    
    ?>
</body>
</html>