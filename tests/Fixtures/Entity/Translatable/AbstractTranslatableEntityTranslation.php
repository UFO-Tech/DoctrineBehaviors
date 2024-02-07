<?php

namespace VasyaXY\DoctrineBehaviors\Tests\Fixtures\Entity\Translatable;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\MappedSuperclass;
use VasyaXY\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use VasyaXY\DoctrineBehaviors\Exception\ShouldNotHappenException;
use VasyaXY\DoctrineBehaviors\Model\Translatable\TranslationTrait;

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
