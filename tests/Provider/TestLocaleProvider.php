<?php

namespace Miets\DoctrineBehaviors\Tests\Provider;

use Miets\DoctrineBehaviors\Contract\Provider\LocaleProviderInterface;

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
