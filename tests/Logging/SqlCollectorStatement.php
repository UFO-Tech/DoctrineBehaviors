<?php

declare(strict_types=1);

namespace Ufo\DoctrineBehaviors\Tests\Logging;

use Doctrine\DBAL\Driver\Middleware\AbstractStatementMiddleware;
use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\Driver\Statement;

final class SqlCollectorStatement extends AbstractStatementMiddleware
{
    public function __construct(
        Statement $statement,
        private readonly SqlCollector $collector,
        private readonly string $sql
    ) {
        parent::__construct($statement);
    }

    public function execute(): Result
    {
        $this->collector->add($this->sql);

        return parent::execute();
    }
}
