<?php
namespace BloodBowl\ODM\Core\Rules;

use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Rules\Skill;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;


class Injury extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;

    /**
     * @var integer
     */
    protected $gamesMissed;

    /**
     * Injuries are simply negative skills.
     *
     * @var \BloodBowl\ODM\Core\Rules\Skill
     */
    protected $skill;

}
