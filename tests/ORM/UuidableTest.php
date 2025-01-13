<?php

namespace Ufo\DoctrineBehaviors\Tests\ORM;

use Ufo\DoctrineBehaviors\Contract\Entity\UuidableInterface;
use Ufo\DoctrineBehaviors\Tests\AbstractBehaviorTestCase;
use Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\UuidableEntity;
use Ramsey\Uuid\UuidInterface;

final class UuidableTest extends AbstractBehaviorTestCase
{
    public function testUuidLoading(): void
    {
        $entity = new UuidableEntity('The name');

        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        $id = $entity->getId();
        $this->assertNotNull($id);

        $this->entityManager->clear();

        $entityRepository = $this->entityManager->getRepository(UuidableEntity::class);

        /** @var UuidableInterface $entity */
        $entity = $entityRepository->find($id);

        $this->assertNotNull($entity);
        $this->assertInstanceOf(UuidInterface::class, $entity->getUuid());
    }
}
