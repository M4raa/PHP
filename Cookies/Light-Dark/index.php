<?php
    $mode = $_GET['x'] ?? $_COOKIE["mode"] ?? 1;
    $value = ($mode == 1) ? "light" : "dark";
    setcookie("mode", $value, time() + (86400 * 30), "/");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Cookies-Light/Dark</title>
</head>
<body class="<?php echo $value;?>">
    <header>
        <nav>
            <ul>
                <li><a href="?x=0">Dark</a></li>
                <li><a href="?x=1">Light</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>