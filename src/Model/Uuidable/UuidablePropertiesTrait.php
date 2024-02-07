<?php

namespace VasyaXY\DoctrineBehaviors\Model\Uuidable;

use Ramsey\Uuid\UuidInterface;

trait UuidablePropertiesTrait
{
    /**
     * @var UuidInterface|string|null
     */
    protected $uuid;
}
