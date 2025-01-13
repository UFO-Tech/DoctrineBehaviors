<?php

namespace Ufo\DoctrineBehaviors\Tests\ORM\Timestampable;

use DateTime;
use Ufo\DoctrineBehaviors\Tests\AbstractBehaviorTestCase;
use Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\Timestampable\TimestampableInheritedEntity;

final class TimestampableWithInheritanceTest extends AbstractBehaviorTestCase
{
    public function testItShouldInitializeCreateAndUpdateDatetimeWhenCreated(): void
    {
        $timestampableInheritedEntity = new TimestampableInheritedEntity();

        $this->entityManager->persist($timestampableInheritedEntity);
        $this->entityManager->flush();

        self::assertInstanceOf(Datetime::class, $timestampableInheritedEntity->getCreatedAt());
        self::assertInstanceOf(Datetime::class, $timestampableInheritedEntity->getUpdatedAt());
        self::assertSame(
            $timestampableInheritedEntity->getCreatedAt(),
            $timestampableInheritedEntity->getUpdatedAt(),
            'On creation, createdAt and updatedAt are the same'
        );
    }
}
