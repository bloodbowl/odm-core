<?php
namespace BloodBowl\ODM\Core;

use \Doctrine\Common\Collections\ArrayCollection;
use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Player;
use \BloodBowl\ODM\Core\Team;

class Roster extends MapperAbstract
{
    /**
     *
     * @var string
     */
    protected $team;

    /**
     *
     * @var unknown
     */
    protected $players;


    public function __construct()
    {
        $this->players = new ArrayCollection();
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

    /**
     * @return the string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return the unknown
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @return the Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param \BloodBowl\ODM\Mapper\Team $team
     */
    public function setTeam(Team $team)
    {
        $this->team = $team;
        return $this;
    }

}
