<?php
/**
 * A character is an instance of a player.
 *
 * @author shrikeh
 *
 */
namespace BloodBowl\ODM\Core;

use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\PlayerSkill;
use \BloodBowl\ODM\Core\Race;
use \Doctrine\Common\Collections\ArrayCollection;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Character extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;

    protected $player;

    /**
     *
     * A collection of injuries the player has.
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $injuries;
}
