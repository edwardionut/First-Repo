<?php

use Shop\ProductRepository;

session_start();

require_once 'vendor/autoload.php';

$message = $_GET['message'] ?? null;

if (isset($_GET['incrementProductId'])) {
    $productId = $_GET['incrementProductId'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]++;
    }
    header('Location: cart.php');
    exit;
}

if (isset($_GET['decrementProductId'])) {
    $productId = $_GET['decrementProductId'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]--;
        if ($_SESSION['cart'][$productId] <= 0) {
            unset($_SESSION['cart'][$productId]);
        }
    }

    if (empty($_SESSION['cart'])) {
        header('Location: cart.php?message=empty');
        exit;
    }
    header('Location: cart.php');
    exit;
}

if (isset($_GET['message']) && $_GET['message'] === 'empty') {
    unset($_SESSION['cart']);
}

if (isset($_GET['productId'])) {
    $productId = $_GET['productId'];
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]++;
    } else {
        $_SESSION['cart'][$productId] = 1;
    }
}

$cartSession = $_SESSION['cart'] ?? [];
$repo = new ProductRepository();

$products = [];
foreach ($cartSession as $productId => $quantity) {
    $product = $repo->getProductById($productId);
    $products[] = $product;
}
?>

<link href="style.css" rel="stylesheet">

<div class="button-container">
    <a href="index.php" class="button">↩</a>
    <a href="emptyCart.php" class="button empty-cart-button">Empty Cart</a>
</div>


<?php if ($message === 'empty'): ?>
    <div class="message">❗️Cosul dumneavoastra este gol❗️</div>
<?php elseif (!empty($products)): ?>
    <table border="1">
        <tr class="header">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product->getName() ?></td>
                <td><?= $product->getPrice() ?></td>
                <td><?= $cartSession[$product->getId()] ?></td>
                <td><?= $product->getPrice() * $cartSession[$product->getId()] ?></td>
                <td>
                    <div class="action-buttons">
                        <a href="cart.php?decrementProductId=<?= $product->getId() ?>" class="button decrement-button">–</a>
                        <a href="cart.php?incrementProductId=<?= $product->getId() ?>" class="button increment-button">+</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
