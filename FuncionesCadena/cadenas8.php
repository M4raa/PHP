<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas-8</title>
</head>
<body>
    <?php
        $nombre = $_GET['x']??'';
        $letra = $_GET['y']??'';
        if (!$nombre == '' & !$letra == ''){
            echo str_ireplace($letra,0,$nombre);
        } else{
            echo 'Falta nombre/letra';
        }
    ?>
    
</body>
</html>