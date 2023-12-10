<?php

namespace VasyaXY\DoctrineBehaviors\Tests\Fixtures\Entity;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\MappedSuperclass;
use VasyaXY\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use VasyaXY\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;

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
