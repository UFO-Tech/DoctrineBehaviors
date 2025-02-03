<?php

namespace Ufo\DoctrineBehaviors\Model\Uuidable;

use Ramsey\Uuid\UuidInterface;

trait UuidablePropertiesTrait
{
    protected UuidInterface|string|null $uuid;
}
