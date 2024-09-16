<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas-1</title>
</head>
<body>
    <?php
        $nombre = $_GET['x'];
        if ($nombre == null) {
            print('Mara');
        } else {
            echo trim($nombre,"/");
        }
        
    ?>
</body>
</html>