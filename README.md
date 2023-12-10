# Doctrine Behaviors

This is fork for symfony 7 from knplabs/doctrine-behaviors

This PHP library is a collection of traits and interfaces that add behaviors to Doctrine entities and repositories.

It currently handles:

 * [Blameable](/docs/blameable.md)
 * [Loggable](/docs/loggable.md)
 * [Sluggable](/docs/sluggable.md)
 * [SoftDeletable](/docs/soft-deletable.md)
 * [Uuidable](/docs/uuidable.md)
 * [Timestampable](/docs/timestampable.md)
 * [Translatable](/docs/translatable.md)
 * [Tree](/docs/tree.md)

## Install

```bash
composer require vasyaxy/doctrine-behaviors
```

## Usage

All you have to do is to define a Doctrine entity:

- implemented interface
- add a trait

For some behaviors like tree, you can use repository traits:

```php
<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use VasyaXY\DoctrineBehaviors\ORM\Tree\TreeTrait;

final class CategoryRepository extends EntityRepository
{
    use TreeTrait;
}
```

Voilà!

You now have a working `Category` that behaves like.

## PHPStan

A PHPStan extension is available and provides the following features:
  - Provides correct return type for `TranslatableInterface::getTranslations()` and `TranslatableInterface::getNewTranslations()`
  - Provides correct return type for `TranslatableInterface::translate()`
  - Provides correct return type for `TranslationInterface::getTranslatable()`

Include `phpstan-extension.neon` in your project's PHPStan config:
```yaml
# phpstan.neon
includes:
    - vendor/vasyaxy/doctrine-behaviors/phpstan-extension.neon
```

## 3 Steps to Contribute

- **1 feature per pull-request**
- **New feature needs tests**
- Tests and static analysis **must pass**:

    ```bash
    vendor/bin/phpunit
    composer fix-cs
    composer phpstan
    ```
