<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-8</title>
</head>
<body>
    <?php
        $name = $_GET['x']??'';
        $letter = $_GET['y']??'';
        if (!$name == '' & !$letter == ''){
            echo str_ireplace($letter,0,$name);
        } else{
            echo 'Missing word/letter';
        }
    ?>
    
</body>
</html>