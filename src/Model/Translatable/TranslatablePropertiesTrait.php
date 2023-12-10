<?php

namespace VasyaXY\DoctrineBehaviors\Model\Translatable;

use Doctrine\Common\Collections\ArrayCollection;
use VasyaXY\DoctrineBehaviors\Contract\Entity\TranslationInterface;

trait TranslatablePropertiesTrait
{
    /**
     * @var Collection<string, TranslationInterface>
     */
    protected $translations = null;

    /**
     * @see mergeNewTranslations
     * @var Collection<string, TranslationInterface>
     */
    protected $newTranslations = null;

    /**
     * currentLocale is a non persisted field configured during postLoad event
     *
     * @var string|null
     */
    protected ?string $currentLocale = null;

    /**
     * @var string
     */
    protected string $defaultLocale = 'en';
}
