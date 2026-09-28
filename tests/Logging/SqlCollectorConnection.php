<?php

declare(strict_types=1);

namespace Ufo\DoctrineBehaviors\Tests\Logging;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\Driver\Middleware\AbstractConnectionMiddleware;
use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\Driver\Statement;

final class SqlCollectorConnection extends AbstractConnectionMiddleware
{
    public function __construct(
        Connection $connection,
        private readonly SqlCollector $collector
    ) {
        parent::__construct($connection);
    }

    public function prepare(string $sql): Statement
    {
        return new SqlCollectorStatement(parent::prepare($sql), $this->collector, $sql);
    }

    public function query(string $sql): Result
    {
        $this->collector->add($sql);

        return parent::query($sql);
    }

    public function exec(string $sql): int|string
    {
        $this->collector->add($sql);

        return parent::exec($sql);
    }

    public function beginTransaction(): void
    {
        $this->collector->add('"START TRANSACTION"');

        parent::beginTransaction();
    }

    public function commit(): void
    {
        $this->collector->add('"COMMIT"');

        parent::commit();
    }

    public function rollBack(): void
    {
        $this->collector->add('"ROLLBACK"');

        parent::rollBack();
    }
}
