<?php

declare(strict_types=1);

namespace Ufo\DoctrineBehaviors\Tests\Logging;

use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Driver\Middleware\AbstractDriverMiddleware;
use SensitiveParameter;

final class SqlCollectorDriver extends AbstractDriverMiddleware
{
    public function __construct(
        Driver $driver,
        private readonly SqlCollector $collector
    ) {
        parent::__construct($driver);
    }

    public function connect(
        #[SensitiveParameter]
        array $params
    ): Connection
    {
        return new SqlCollectorConnection(parent::connect($params), $this->collector);
    }
}
