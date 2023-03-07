<?php

declare(strict_types=1);

namespace GS\Shared\Infrastructure\Lumen\Provider;

use GS\Shoop\Product\Application\Create\CreateProductCommandHandler;
use GS\Shoop\Product\Domain\ProductRepository;
use GS\Shoop\Product\Infrastructure\EloquentProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);

        $this->app->tag([], 'domain_event_subscriber');

        $this->app->tag(
            [],
            'domain_query_handler'
        );

        $this->app->tag(
            [
                CreateProductCommandHandler::class


            ],
            'domain_command_handler'
        );
    }

    public function __invoke(): string
    {
        return static::class;
    }
}
