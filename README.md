# Doctrine Behaviors

Fork of a fork of [KnpLabs/DoctrineBehaviors](https://github.com/KnpLabs/DoctrineBehaviors) to ensure compatibility with Symfony 7+ and Doctrine DBAL 4+, addressing limitations in the original package, which was restricted to Symfony 6.3 and older versions of Doctrine.

This fork is maintained for use in modern Symfony projects and provides continued support for features like `Timestampable`, `Translatable`, `Blameable`, `SoftDeletable`, `Tree`, and `Uuid`. The original bundle does not work beyond Symfony 6.3, which makes it unsuitable for up-to-date projects.

## Features

This bundle includes the following Doctrine behaviors:

- **Timestampable**: Automatically handle `createdAt` and `updatedAt` fields.
- **Translatable**: Add support for translations in your entities.
- **Blameable**: Automatically set `createdBy` and `updatedBy` fields.
- **SoftDeletable**: Add support for soft deletes.
- **Tree**: Enable tree structures for your entities.
- **Uuid**: Support UUIDs as primary keys or identifiers.

## Requirements

- **PHP**: >=8.2
- **Symfony**: ^7.0 | ^8.0
- **Doctrine DBAL**: ^3.2|^4.2
- **Doctrine ORM**: ^3.3
- **DoctrineBundle**: ^2.6

## Installation

Install via Composer:

```bash
composer require ufo-tech/doctrine-behaviors
```

## Configuration
Enable the bundle in your Symfony project by adding it to bundles.php:

```php
<?php

return [
    // Other bundles
    Ufo\DoctrineBehaviors\DoctrineBehaviorsBundle::class => ['all' => true],
];

```

## Usage
[Read original docs](https://github.com/KnpLabs/DoctrineBehaviors/tree/master/docs)

