<?php

namespace GS\HealthCheck\Application;

use GS\Shared\Domain\Bus\Query\Response;

class HealthCheckResponse implements Response
{

    public function __construct(private string $ping)
    {

    }

    public function ping() : string
    {
        return $this->ping;
    }

}
