<?php

namespace Ufo\DoctrineBehaviors\Tests;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;

final class DatabaseLoader
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        // DBAL 4 removed Configuration::setSQLLogger(); no SQL logger is registered by default.
    }

    public function reload(): void
    {
        $classMetadataFactory = $this->entityManager->getMetadataFactory();

        $classesMetadatas = $classMetadataFactory->getAllMetadata();

        $entityClasses = [];
        foreach ($classesMetadatas as $classMetadata) {
            $entityClasses[] = $classMetadata->getName();
        }

        $this->reloadEntityClasses($entityClasses);
    }

    /**
     * @param class-string[] $entityClasses
     */
    public function reloadEntityClasses(array $entityClasses): void
    {
        $schema = [];
        foreach ($entityClasses as $entityClass) {
            $schema[] = $this->entityManager->getClassMetadata($entityClass);
        }

        $schemaTool = new SchemaTool($this->entityManager);
        $schemaTool->dropSchema($schema);
        $schemaTool->createSchema($schema);
    }
}
