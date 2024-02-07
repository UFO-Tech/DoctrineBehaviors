<?php

namespace Miets\DoctrineBehaviors\Contract\Entity;

interface LoggableInterface
{
    public function getUpdateLogMessage(array $changeSets = []): string;

    public function getCreateLogMessage(): string;

    public function getRemoveLogMessage(): string;
}
