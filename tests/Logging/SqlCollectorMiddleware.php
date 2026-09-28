<?php

declare(strict_types=1);

namespace Ufo\DoctrineBehaviors\Tests\Logging;

use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\Middleware;

final class SqlCollectorMiddleware implements Middleware
{
    public function __construct(
        private readonly SqlCollector $collector
    ) {}

    public function wrap(Driver $driver): Driver
    {
        return new SqlCollectorDriver($driver, $this->collector);
    }
}
