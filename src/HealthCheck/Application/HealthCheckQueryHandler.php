<?php

namespace GS\HealthCheck\Application;

use GS\Shared\Domain\Bus\Query\QueryHandler;
use GS\Shared\Domain\Bus\Query\Response;

class HealthCheckQueryHandler implements QueryHandler
{

    public function __construct(private HealthCheckQueryService $service)
    {}

    public function __invoke(HealthCheckQuery $query) : HealthCheckResponse
    {
        return new HealthCheckResponse($this->service->ping());
    }

}
