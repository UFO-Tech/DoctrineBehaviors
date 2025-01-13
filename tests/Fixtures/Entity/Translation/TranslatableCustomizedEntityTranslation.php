<?php

namespace Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\Translation;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Ufo\DoctrineBehaviors\Contract\Entity\TranslationInterface;
use Ufo\DoctrineBehaviors\Model\Translatable\TranslationTrait;
use Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\TranslatableCustomizedEntity;

/**
 * Used to test translatable classes which declare a custom translation class.
 */
#[Entity]
class TranslatableCustomizedEntityTranslation implements TranslationInterface
{
    use TranslationTrait;

    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'AUTO')]
    private int $id;

    #[Column(type: 'string')]
    private ?string $title = null;

    public function getId(): int
    {
        return $this->id;
    }

    public static function getTranslatableEntityClass(): string
    {
        return TranslatableCustomizedEntity::class;
    }

    public function getTitle(): string|null
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
