<?php

namespace Ufo\DoctrineBehaviors\Tests\ORM\Timestampable;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping\ClassMetadata;
use Ufo\DoctrineBehaviors\Tests\AbstractBehaviorTestCase;
use Ufo\DoctrineBehaviors\Tests\ORM\Timestampable\Source\SomeClassForMetadata;

/**
 * When console make:entity creates a new class, the event arguments are not fully populated
 *
 * This test emulates the event dispatch near the end of method
 * Doctrine\ORM\Mapping\ClassMetadataFactory::doLoadMetadata()
 */
final class TimestampableMakeEntityTest extends AbstractBehaviorTestCase
{
    public function testMakeEntityEmptyEvent(): void
    {
        $classMetadata = new ClassMetadata(SomeClassForMetadata::class);
        $loadClassMetadataEventArgs = new LoadClassMetadataEventArgs($classMetadata, $this->entityManager);

        $doctrineEventManager = $this->entityManager->getEventManager();
        $doctrineEventManager->dispatchEvent(Events::loadClassMetadata, $loadClassMetadataEventArgs);
        $this->expectNotToPerformAssertions();
    }
}
