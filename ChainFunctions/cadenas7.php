<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-7</title>
</head>
<body>
    <?php
        $name = $_GET['x']??'';
        $letter = $_GET['y']??'';
        if (!$name == '' & !$letter == ''){
            $pos = stripos(strtoupper($name),strtoupper($letter));
            if (!$pos==null){
                echo "The letter ".$letter." is in the position: ".$pos+1;
            } else {echo 'That letter isn\'t in the word';}
        } else{
            echo 'Missing word/letter';
        }
    ?>
    
</body>
</html>