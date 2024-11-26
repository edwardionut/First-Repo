<?php

use Shop\ProductRepository;

session_start();

require_once 'vendor/autoload.php';

$products = (new ProductRepository())->getAllProducts();

?>

<link rel="stylesheet" href="style.css">

<table border="1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?=$product->getName()?></td>
            <td><?=$product->getDescription()?></td>
            <td><?=$product->getPrice()?></td>
            <td><a href="cart.php?productId=<?=$product->getId()?>">ADD TO CART</a></td>
        </tr>
    <?php endforeach; ?>
</table>