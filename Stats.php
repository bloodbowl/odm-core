<?php
namespace BloodBowl\ODM\Core;

use \BloodBowl\ODM\Core\MapperAbstract;

class Stats extends MapperAbstract
{

    /**
     * The strength (or modifier) of the player.
     *
     * @var integer
     */
    protected $movement;

    /**
     * The strength (or modifier) of the player.
     *
     * @var integer
     */
    protected $strength;

    /**
     * The agility (or modifier) of the player.
     *
     * @var integer
     */
    protected $agility;

    /**
     * The armour value (or modifier) of the player.
     *
     * @var integer
     */
    protected $armourValue;

    /**
     * Any modifiers to the player when they make an injury roll.
     *
     * @var integer
     */
    protected $injury;



}
