<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas-5</title>
</head>
<body>
    <?php
        $str = $_GET['x'];
        $prefijo = $_GET['y'];
        if (!$prefijo == null){
            if(strpos($str,$prefijo)===false){
                echo 'La palabra no empieza por el prefijo';
            } else{
                echo 'La palabra empieza por el prefijo';
            }
        } else{
            echo 'No hay prefijo';
        }
    ?>
    
</body>
</html>