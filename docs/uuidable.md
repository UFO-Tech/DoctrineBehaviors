# Uuidable

Uuidable generates uuid4 for an entity. Will automatically generate on persist.

```php
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Ufo\DoctrineBehaviors\Contract\Entity\UuidableInterface;
use Ufo\DoctrineBehaviors\Model\Uuidable\UuidableTrait;

/**
 * @ORM\Entity
 */
class BlogPost implements UuidableInterface
{
    use UuidableTrait;
}
```
