<?php

namespace Ufo\DoctrineBehaviors\Tests\ORM\Sluggable;

use Doctrine\Persistence\ObjectRepository;
use Ufo\DoctrineBehaviors\Tests\AbstractBehaviorTestCase;
use Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\Sluggable\SluggableEntity;
use Ufo\DoctrineBehaviors\Tests\Fixtures\Entity\Sluggable\SluggableWithoutRegenerateEntity;

final class SluggableWithoutRegenerateTest extends AbstractBehaviorTestCase
{
    /**
     * @var ObjectRepository<SluggableWithoutRegenerateEntity>
     */
    private ObjectRepository $sluggableWithoutRegenerateRepository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sluggableWithoutRegenerateRepository = $this->entityManager->getRepository(
            SluggableWithoutRegenerateEntity::class
        );
    }

    public function testSlugLoading(): void
    {
        $entity = new SluggableWithoutRegenerateEntity();
        $entity->setName('The name');

        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        $id = $entity->getId();
        $this->assertNotNull($id);

        $this->entityManager->clear();

        /** @var SluggableEntity $entity */
        $entity = $this->sluggableWithoutRegenerateRepository->find($id);

        $this->assertNotNull($entity);
        $this->assertSame('the-name', $entity->getSlug());
    }

    public function testNotUpdatedSlug(): void
    {
        $sluggableWithoutRegenerateEntity = new SluggableWithoutRegenerateEntity();
        $sluggableWithoutRegenerateEntity->setName('The name');

        $this->entityManager->persist($sluggableWithoutRegenerateEntity);
        $this->entityManager->flush();

        $this->assertSame('the-name', $sluggableWithoutRegenerateEntity->getSlug());

        $sluggableWithoutRegenerateEntity->setName('The name 2');

        $this->entityManager->persist($sluggableWithoutRegenerateEntity);
        $this->entityManager->flush();

        $this->assertSame('the-name', $sluggableWithoutRegenerateEntity->getSlug());
    }
}
