<?php

namespace Ufo\DoctrineBehaviors\Model\Timestampable;

use DateTimeInterface;

trait TimestampablePropertiesTrait
{
    protected ?DateTimeInterface $createdAt = null;
    protected ?DateTimeInterface $updatedAt = null;
}
