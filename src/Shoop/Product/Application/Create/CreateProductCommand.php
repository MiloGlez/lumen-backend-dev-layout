<?php

declare(strict_types=1);

namespace GS\Shoop\Product\Application\Create;

use GS\Shared\Domain\Bus\Command\Command;

final class CreateProductCommand implements Command
{
    public function __construct(
        private $id,
        private $name
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }
}
