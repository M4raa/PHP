<?php
    $nav = $_SERVER['HTTP_USER_AGENT'];
    $content = "";
    if(strpos($nav, 'OPR')){
        $content = "This is the web page only visible in Opera browser";
    } else {
        $content = "Error, you are not using Opera browser.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header-Browser</title>
</head>
<body>
    <?php
        echo $content;
    ?>
</body>
</html>
