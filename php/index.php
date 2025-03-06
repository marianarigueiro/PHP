<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primos</title>
</head>
<body>
    <?php 
    for($i = 2; $i <= 100; $i++){
        $primo = 1;
        for($s = 2; $s <= $i/2; $s++){
            $primo = $i % $s != 0;
        }
        echo $i * $primo == $i ? $i . "" : "";
    }
    ?>
</body>
</html>