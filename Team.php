<?php
namespace BloodBowl\ODM\Core;

use \Doctrine\Common\Collections\ArrayCollection;
use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Roster;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Team extends MapperAbstract implements Nameable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;

    /**
     *
     * @var \BloodBowl\ODM\Mapper\Coach
     */
    protected $coach;

    /**
     *
     * @var \BloodBowl\ODM\Mapper\Roster
     */
    protected $roster;

    /**
     * Number of rerolls the team has.
     *
     * @var integer
     */
    protected $reRolls;

    /**
     * The number of apothecaries on the team.
     * @var integer
     */
    protected $apothecaries;

    /**
     * Number of cheerleaders the team has.
     *
     * @var integer
     */
    protected $cheerLeaders;

    /**
     * Number of assistance coaches the team has.
     *
     * @var integer
     */
    protected $assistantCoaches;

    /**
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $inducements;


    /**
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $players;


    public function __construct()
    {
        $this->players = new ArrayCollection();
        $this->inducements = new ArrayCollection();
    }


    /**
     * @return the unknown
     */
    public function getPlayers()
    {
        return $this->players;
    }

    public function setPlayers($players)
    {
        foreach ($players as $player) {
            $this->addPlayer($player);
        }
        return $this;
    }

    public function addPlayer(Player $player)
    {
        $this->players[] = $player;
        return $this;
    }

    /**
     * @return the unknown
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param  $coach
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;
        return $this;
    }

    pubic function getInducements()
    {
        
    }
}
