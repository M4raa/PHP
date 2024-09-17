<?php
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename="products.csv"');
    $output = fopen('php://output', 'w');
    $products = ["1" => "Product 1", "2" => "Product 2", "3" => "Product 3"];
    fputcsv($output, ['ID','Name of the product']);
    foreach ($products as $id => $producto) {
        fputcsv($output, [$id, $producto],';');
    }
    fclose($output);
?>