<?php

namespace Ufo\DoctrineBehaviors\Tests\Provider;

use Ufo\DoctrineBehaviors\Contract\Provider\LocaleProviderInterface;

final class TestLocaleProvider implements LocaleProviderInterface
{
    public function provideCurrentLocale(): ?string
    {
        return 'en';
    }

    public function provideFallbackLocale(): ?string
    {
        return 'en';
    }
}
