<?php

namespace Miets\DoctrineBehaviors\Tests\Fixtures\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Miets\DoctrineBehaviors\Contract\Entity\LoggableInterface;
use Miets\DoctrineBehaviors\Model\Loggable\LoggableTrait;

#[Entity]
class LoggableEntity implements LoggableInterface
{
    use LoggableTrait;

    #[Column(type: 'string', nullable: true)]
    private ?string $title = null;

    #[Id]
    #[Column(type: 'integer')]
    #[GeneratedValue(strategy: 'AUTO')]
    private int $id;

    /**
     * @var string[]|null
     */
    #[Column(type: 'array', nullable: true)]
    private array|null $roles = null;

    #[Column(type: 'date', nullable: true)]
    private DateTimeInterface|null $dateTime = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getRoles(): array|null
    {
        return $this->roles;
    }

    public function setRoles(?array $roles = null): void
    {
        $this->roles = $roles;
    }

    public function getDate(): \DateTimeInterface|null
    {
        return $this->dateTime;
    }

    public function setDate(DateTimeInterface $dateTime): void
    {
        $this->dateTime = $dateTime;
    }
}
