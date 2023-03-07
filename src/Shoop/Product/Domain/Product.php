<?php

declare(strict_types=1);

namespace GS\Shoop\Product\Domain;

use GS\Shoop\Product\Domain\ValueObject\ProductId;
use GS\Shoop\Product\Domain\ValueObject\ProductName;

final class Product

{
    public function __construct(
        private ProductId $id,
        private ProductName $name
    ) {
    }

    public static function create(
        ProductId $id,
        ProductName $name
    ): self {
        return new self(
            $id,
            $name
        );
    }

    public function id(): ProductId
    {
        return $this->id;
    }

    public function name(): ProductName
    {
        return $this->name;
    }

    public function toPrimitivesArray()
    {
        return [
            'id' => $this->id()->value(),
            'name' => $this->name()->value(),
        ];
    }
}
