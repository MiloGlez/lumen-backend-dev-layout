<?php
declare(strict_types=1);
namespace GS\Shoop\Product\Domain;

interface ProductRepository
{
    public function create(Product $product): void;
}