<?php
namespace BloodBowl\ODM\Core\Team;

use \Doctrine\Common\Collections\ArrayCollection;
use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Roster;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Selection extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;
    use  \BloodBowl\ODM\Core\Traits\Describable;

    protected $positions;

    protected $rerollCost;

    protected $logo;

}
