<?php

declare(strict_types=1);

namespace Ufo\DoctrineBehaviors\Tests\Logging;

/**
 * Заміна DBAL\Logging\DebugStack, прибраного в DBAL 4.
 */
final class SqlCollector
{
    /**
     * @var array<int, array{sql: string}> нумерація з 1, як у DebugStack
     */
    public array $queries = [];

    private bool $enabled = false;

    private int $currentQuery = 0;

    public function enable(): void
    {
        $this->queries = [];
        $this->currentQuery = 0;
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    public function add(string $sql): void
    {
        if (! $this->enabled) {
            return;
        }

        $this->queries[++$this->currentQuery] = ['sql' => $sql];
    }
}
