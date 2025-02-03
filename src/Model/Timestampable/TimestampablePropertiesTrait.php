<?php

namespace Ufo\DoctrineBehaviors\Model\Timestampable;

use DateTimeInterface;

trait TimestampablePropertiesTrait
{
    protected DateTimeInterface $createdAt;

    protected DateTimeInterface $updatedAt;
}
