<?php

namespace Miets\DoctrineBehaviors\Tests\Fixtures\Entity\Translatable;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Miets\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Miets\DoctrineBehaviors\Model\Translatable\TranslatableTrait;

#[MappedSuperclass]
abstract class AbstractTranslatableEntity implements TranslatableInterface
{
    use TranslatableTrait;

    /**
     * @return mixed
     */
    public function __call(string $method, array $arguments)
    {
        return $this->proxyCurrentLocaleTranslation($method, $arguments);
    }
}
