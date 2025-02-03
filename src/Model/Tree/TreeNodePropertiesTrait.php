<?php

namespace Ufo\DoctrineBehaviors\Model\Tree;

use Doctrine\Common\Collections\Collection;
use Ufo\DoctrineBehaviors\Contract\Entity\TreeNodeInterface;

trait TreeNodePropertiesTrait
{
    protected string $materializedPath = '';

    protected string $parentNodePath = '';

    /**
     * @var TreeNodeInterface[]
     */
    private Collection $childNodes;

    private ?TreeNodeInterface $parentNode;
}
