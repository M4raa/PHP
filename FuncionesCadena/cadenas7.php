<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas-7</title>
</head>
<body>
    <?php
        $nombre = $_GET['x']??'';
        $letra = $_GET['y']??'';
        if (!$nombre == '' & !$letra == ''){
            $pos = stripos(strtoupper($nombre),strtoupper($letra));
            if (!$pos==null){
                echo $pos;
            } else {echo 'No esta esa letra en la palabra';}
        } else{
            echo 'Falta nombre/letra';
        }
    ?>
    
</body>
</html>