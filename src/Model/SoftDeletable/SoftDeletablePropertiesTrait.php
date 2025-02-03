<?php

namespace Ufo\DoctrineBehaviors\Model\SoftDeletable;

use DateTimeInterface;

trait SoftDeletablePropertiesTrait
{
    protected ?DateTimeInterface $deletedAt;
}
