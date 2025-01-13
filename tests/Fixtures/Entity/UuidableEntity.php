<?php

namespace Ufo\DoctrineBehaviors\Tests\Fixtures\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Ufo\DoctrineBehaviors\Contract\Entity\UuidableInterface;
use Ufo\DoctrineBehaviors\Model\Uuidable\UuidableTrait;

#[Entity]
class UuidableEntity implements UuidableInterface
{
    use UuidableTrait;

    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'AUTO')]
    private int $id;

    public function __construct(
        #[Column(type: 'string')] private string $name
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
