<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chains-9</title>
</head>
<body>
    <?php
        $url = 'http://username:password@hostname:9090/path?arg=value';
        echo 'Protocol: '.parse_url($url,PHP_URL_SCHEME).'<br>';
        echo 'User: '.parse_url($url,PHP_URL_USER).'<br>';
        echo 'Path: '.parse_url($url,PHP_URL_PATH).'<br>';
        echo 'Querystring: '.parse_url($url,PHP_URL_QUERY);

    ?>
    
</body>
</html>