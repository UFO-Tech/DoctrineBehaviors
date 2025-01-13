<?php

namespace Ufo\DoctrineBehaviors\Tests\Fixtures\Entity;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Ufo\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Ufo\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;

#[MappedSuperclass]
abstract class AbstractTimestampableMappedSuperclassEntity implements TimestampableInterface
{
    use TimestampableTrait;

    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'AUTO')]
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
