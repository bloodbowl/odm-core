<?php
namespace BloodBowl\ODM\Core\Rules;

use \BloodBowl\ODM\Core\MapperAbstract;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Skill extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;

    protected $type;

    protected $description;

    protected $blacklist;
}
