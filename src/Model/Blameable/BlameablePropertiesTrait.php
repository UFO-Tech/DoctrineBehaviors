<?php

namespace Ufo\DoctrineBehaviors\Model\Blameable;

trait BlameablePropertiesTrait
{
    protected string|int|object $createdBy;

    protected string|int|object $updatedBy;

    protected string|int|object $deletedBy;
}
