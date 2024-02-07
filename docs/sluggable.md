# Sluggable

Sluggable generates slugs (uniqueness is not guaranteed) for an entity. 

Will automatically generate on update/persist (you can disable the on update generation by overriding `shouldRegenerateSlugOnUpdate()` to return `false`.

You can also override the slug delimiter from the default `-` by overriding `getSlugDelimiter()` method.

Slug generation algo can be changed by overriding `generateSlugValue()`.

Use cases include SEO (i.e. URLs like `http://example.com/post/3/introduction-to-php`)

```php
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use VasyaXY\DoctrineBehaviors\Contract\Entity\SluggableInterface;
use VasyaXY\DoctrineBehaviors\Model\Sluggable\SluggableTrait;

/**
 * @ORM\Entity
 */
class BlogPost implements SluggableInterface
{
    use SluggableTrait;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $title;

    /**
     * @return string[]
     */
    public function getSluggableFields(): array
    {
        return ['title'];
    }

    public function generateSlugValue($values): string
    {
        return implode('-', $values);
    }
}
```
