<?php

namespace VasyaXY\DoctrineBehaviors\Contract\Provider;

interface UserProviderInterface
{
    /**
     * @return object|string|null
     */
    public function provideUser();

    public function provideUserEntity(): ?string;
}
