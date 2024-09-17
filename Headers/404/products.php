<?php
    $id = $_GET['id'] ?? null;
    $products = ["1" => "Product 1", "2" => "Product 2", "3" => "Product 3"];
    if ($id == null){
        echo "Introduce a product Id";
    } elseif (!array_key_exists($id, $products)) {
        http_response_code(404);
    } else{
        echo $products[$id];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header-Products</title>
</head>
<body>
</body>
</html>
