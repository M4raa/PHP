<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-6</title>
</head>
<body>
    <?php
        $name = $_GET['x'];
        $letter = $_GET['y'];
        if (!$name == null & !$letter == null){
            echo substr_count(strtoupper($name),strtoupper($letter));
        } else{
            echo 'Missing word/letter';
        }
    ?>
    
</body>
</html>