<?php

namespace Shop;

use PDO;

class ProductRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts(): array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products');
        $stmt->execute();
        $productsDb = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $products = [];

        foreach ($productsDb as $productDb) {
            $product = new Product(
                $productDb['name'],
                $productDb['description'],
                $productDb['price'],
            );
            $product->setId((int) $productDb['id']);
            $products[] = $product;
        }
        return $products;
    }

    public function getProductById(int $productId): ?Product // ?Product -> Putem returna NULL sau Product
    {
        $stmt = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $stmt->bindParam(':id', $productId);
        $stmt->execute();
        $productDb = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($productDb) {
            $product = new Product(
                $productDb['name'],
                $productDb['description'],
                $productDb['price'],
            );
            $product->setId((int) $productDb['id']);

            return $product;
        }

        return null;
    }
}