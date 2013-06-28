<?php
namespace BloodBowl\ODM\Core\Rules;

use \BloodBowl\ODM\Core\Stats;
use \BloodBowl\ODM\Core\MapperAbstract;
use \Doctrine\Common\Collections\ArrayCollection;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Race extends MapperAbstract
{
    use \BloodBowl\ODM\Core\Traits\Skillable;
    use \BloodBowl\ODM\Core\Traits\Stattable;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;
}
