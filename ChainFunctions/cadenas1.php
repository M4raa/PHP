<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-1</title>
</head>
<body>
    <?php
        $name = $_GET['x'];
        if ($name == null) {
            print('Mara');
        } else {
            echo trim($name,"/");
        }
        
    ?>
</body>
</html>