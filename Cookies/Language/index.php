<?php
    $lang = $_GET['lang'] ?? $_COOKIE["lang"] ?? "es";
    setcookie("lang", $lang, time() + (86400 * 30), "/");
    if ($lang == "es") {
        $content = "<div>El idioma de esta página está en Español</div>";
    } elseif ($lang == "en") {
        $content = "<div>The language of this web page is in English</div>";
    }
    ?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Cookies-Language</title>
</head>
<body class="<?php echo $lang;?>">
    <header>
        <nav>
            <ul>
                <li><a href="?lang=es">Es</a></li>
                <li><a href="?lang=en">En</a></li>
            </ul>
        </nav>
    </header>
    <?php echo $content;?>
</body>
</html>