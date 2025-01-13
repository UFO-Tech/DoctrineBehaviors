# Changelog

This is a fork of [KnpLabs/DoctrineBehaviors](https://github.com/KnpLabs/DoctrineBehaviors).

<!-- changelog-linker -->

## [v1.0.0] - 2025-01-13

### Changed

- Added support for Symfony 7 and Symfony 8.
- Updated requirements to ensure compatibility with the latest versions of PHP, Doctrine, and Symfony components.

### Supported Versions

#### PHP
- `>=8.2`

#### Doctrine
- `doctrine/common: ^3.3`
- `doctrine/persistence: ^2.5|^3.0`
- `doctrine/dbal: ^3.2|^4.2`
- `doctrine/orm: ^3.3`
- `doctrine/doctrine-bundle: ^2.6`

#### Symfony
- `symfony/cache: ^7.0|^8.0`
- `symfony/dependency-injection: ^7.0|^8.0`
- `symfony/http-kernel: ^7.0|^8.0`
- `symfony/security-core: ^7.0|^8.0`
- `symfony/framework-bundle: ^7.0|^8.0`
- `symfony/string: ^7.0|^8.0`
- `symfony/translation-contracts: ^2.4|^3.0|^4.0|^5.0`

#### Additional Dependencies
- `nette/utils: ^4.0`
- `ramsey/uuid: ^4.2`

### Notes

This fork ensures compatibility with Symfony 7+ and Doctrine DBAL 4+, addressing limitations in the original package, which was restricted to Symfony 6.3 and older versions of Doctrine. For more details, visit [the repository](https://github.com/Ufo-Tech/DoctrineBehaviors).
