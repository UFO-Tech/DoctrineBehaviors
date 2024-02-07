<?php

namespace Miets\DoctrineBehaviors\Tests\Fixtures\Entity\Translatable;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Miets\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use Miets\DoctrineBehaviors\Exception\ShouldNotHappenException;
use Miets\DoctrineBehaviors\Model\Translatable\TranslationTrait;

#[MappedSuperclass]
abstract class AbstractTranslatableEntityTranslation implements TranslationInterface
{
    use TranslationTrait;

    #[Column(type: 'string')]
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
