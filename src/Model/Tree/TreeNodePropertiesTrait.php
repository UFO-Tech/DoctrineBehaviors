<?php

namespace VasyaXY\DoctrineBehaviors\Model\Tree;

use Doctrine\Common\Collections\Collection;
use Knp\DoctrineBehaviors\Contract\Entity\TreeNodeInterface;

trait TreeNodePropertiesTrait
{
    /**
     * @var string
     */
    protected $materializedPath = '';

    /**
     * @var Collection|TreeNodeInterface[]
     */
    private $childNodes;

    /**
     * @var TreeNodeInterface|null
     */
    private $parentNode;
}
