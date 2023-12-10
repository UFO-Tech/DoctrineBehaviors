<?php

namespace VasyaXY\DoctrineBehaviors\Tests\Fixtures\Repository;

use Doctrine\ORM\EntityRepository;
use VasyaXY\DoctrineBehaviors\ORM\Tree\TreeTrait;

final class TreeNodeRepository extends EntityRepository
{
    use TreeTrait;
}
