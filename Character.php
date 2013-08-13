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
use \BloodBowl\ODM\Core\Team\Player;
use \Doctrine\Common\Collections\ArrayCollection;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Character extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;
    use \BloodBowl\ODM\Core\Traits\Stattable;

    /**
     * @var \BloodBowl\ODM\Core\Team\Player
     */
    protected $player;

    /**
     *
     * A collection of injuries the player has.
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $injuries;

    protected $skills;
}
