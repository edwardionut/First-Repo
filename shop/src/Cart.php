<?php

namespace Shop;

class Cart
{
    private int $userId;

    private array $productList;

    public function __construct(int $userId, array $productList)
    {
        $this->productList = $productList;
        $this->userId = $userId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    public function getProductList(): array
    {
        return $this->productList;
    }

    public function addToCart(Product $product): void
    {
        $this->productList[] = $product;
    }

}