<?php

namespace VasyaXY\DoctrineBehaviors\Contract\Entity;

use DateTimeInterface;

interface TimestampableInterface
{
    public function updateTimestamps(): void;

    public function getCreatedAt(): ?DateTimeInterface;

    public function setCreatedAt(DateTimeInterface $createdAt): void;

    public function getUpdatedAt(): ?DateTimeInterface;

    public function setUpdatedAt(DateTimeInterface $updatedAt): void;
}
