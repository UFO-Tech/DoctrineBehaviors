<?php

namespace Miets\DoctrineBehaviors\Tests\Fixtures\Entity\Timestampable;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Miets\DoctrineBehaviors\Exception\ShouldNotHappenException;
use Miets\DoctrineBehaviors\Tests\Fixtures\Entity\AbstractTimestampableMappedSuperclassEntity;

#[Entity]
class TimestampableInheritedEntity extends AbstractTimestampableMappedSuperclassEntity
{
    #[Column(type: 'string', nullable: true)]
    private ?string $title = null;

    public function getTitle(): string
    {
        if ($this->title === null) {
            throw new ShouldNotHappenException();
        }

        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
