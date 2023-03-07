<?php
declare(strict_types=1);
namespace GS\Shoop\Product\Infrastructure;

use GS\Shoop\Product\Domain\Product;
use GS\Shoop\Product\Domain\ProductRepository;
use Illuminate\Support\Facades\DB;

final class EloquentProductRepository implements ProductRepository
{
    public function create(Product $product): void
    {
        DB::table('products')->insert($product->toPrimitivesArray());
    }
}