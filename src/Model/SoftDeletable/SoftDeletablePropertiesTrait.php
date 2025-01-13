<?php

namespace Ufo\DoctrineBehaviors\Model\SoftDeletable;

use DateTimeInterface;

trait SoftDeletablePropertiesTrait
{
    /**
     * @var DateTimeInterface|null
     */
    protected $deletedAt;
}
