<?php

namespace VasyaXY\DoctrineBehaviors\Model\Translatable;

use VasyaXY\DoctrineBehaviors\Contract\Entity\TranslatableInterface;

trait TranslationPropertiesTrait
{
    /**
     * @var string
     */
    protected $locale;

    /**
     * Will be mapped to translatable entity by TranslatableSubscriber
     *
     * @var TranslatableInterface
     */
    protected $translatable;
}
