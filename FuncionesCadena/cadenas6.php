<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas-6</title>
</head>
<body>
    <?php
        $nombre = $_GET['x'];
        $letra = $_GET['y'];
        if (!$nombre == null & !$letra == null){
            echo substr_count(strtoupper($nombre),strtoupper($letra));
        } else{
            echo 'Falta nombre/letra';
        }
    ?>
    
</body>
</html>