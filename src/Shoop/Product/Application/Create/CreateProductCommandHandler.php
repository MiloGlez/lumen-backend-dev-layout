<?php
declare(strict_types=1);
namespace GS\Shoop\Product\Application\Create;

use GS\Shared\Domain\Bus\Command\CommandHandler;
use GS\Shoop\Product\Domain\Product;
use GS\Shoop\Product\Domain\ProductRepository;
use GS\Shoop\Product\Domain\ValueObject\ProductId;
use GS\Shoop\Product\Domain\ValueObject\ProductName;

final class CreateProductCommandHandler implements CommandHandler
{
    public function __construct(private CreateProductService $service)
    {
        
    }

    public function __invoke(CreateProductCommand $command): void
    {
        $this->service->create(
            new ProductId($command->id()),
            new ProductName($command->name())
        );
    }
}
