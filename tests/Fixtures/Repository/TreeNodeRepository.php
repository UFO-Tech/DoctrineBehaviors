<?php

namespace Miets\DoctrineBehaviors\Tests\Fixtures\Repository;

use Doctrine\ORM\EntityRepository;
use Miets\DoctrineBehaviors\ORM\Tree\TreeTrait;

final class TreeNodeRepository extends EntityRepository
{
    use TreeTrait;
}
