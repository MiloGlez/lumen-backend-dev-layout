<?php
declare(strict_types=1);
namespace GS\Shoop\Product\Application\Create;

use GS\Shoop\Product\Domain\Product;
use GS\Shoop\Product\Domain\ProductRepository;
use GS\Shoop\Product\Domain\ValueObject\ProductId;
use GS\Shoop\Product\Domain\ValueObject\ProductName;

final class CreateProductService 
{
    public function __construct(private ProductRepository $repository)
    {
        
    }

    public function create(
        ProductId $id,
        ProductName $name, 
    )
    {
        $product = Product::create(
            $id,
            $name
        );

        $this->repository->create($product);
    }
}