<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-5</title>
</head>
<body>
    <?php
        $str = $_GET['x'];
        $prefix = $_GET['y'];
        if (!$prefix == null){
            if(!str_starts_with($str, $prefix)){
                echo 'The word doesn\'t start by the prefix';
            } else{
                echo 'The word does start by the prefix';
            }
        } else{
            echo 'There isn\'t a prefix';
        }
    ?>
    
</body>
</html>