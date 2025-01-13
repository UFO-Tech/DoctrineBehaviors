<?php

namespace Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\Translatable;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Ufo\DoctrineBehaviors\Exception\ShouldNotHappenException;

#[Entity]
class ExtendedTranslatableEntityWithJoinTableInheritance extends TranslatableEntityWithJoinTableInheritance
{
    #[Column(type: 'string')]
    private ?string $untranslatedField = null;

    /**
     * @throws ShouldNotHappenException
     */
    public function getUntranslatedField(): string
    {
        if ($this->untranslatedField === null) {
            throw new ShouldNotHappenException();
        }

        return $this->untranslatedField;
    }

    public function setUntranslatedField(String $untranslatedField): void
    {
        $this->untranslatedField = $untranslatedField;
    }
}
