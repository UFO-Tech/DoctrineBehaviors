<?php

namespace Ufo\DoctrineBehaviors\Model\Translatable;

use Ufo\DoctrineBehaviors\Contract\Entity\TranslatableInterface;

trait TranslationPropertiesTrait
{
    /**
     * @var string
     */
    protected ?string $locale = null;

    /**
     * Will be mapped to translatable entity by TranslatableSubscriber
     *
     * @var TranslatableInterface
     */
    protected ?TranslatableInterface $translatable = null;
}
