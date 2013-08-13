<?php
namespace BloodBowl\ODM\Core\Team;

use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Race;
use \Doctrine\Common\Collections\ArrayCollection;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Nameable;

class Player extends MapperAbstract implements Nameable
{
    use \BloodBowl\ODM\Core\Traits\Stattable;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Nameable;

    /**
     *
     * Race of the player.
     *
     * @var \BloodBowl\ODM\Core\Race
     */
    protected $race;

    /**
     *
     * Position (if any) of the player.
     *
     * @var \BloodBowl\ODM\Core\Rules\Position
     */
    protected $position;

    /**
     * @return \BloodBowl\ODM\Core\Race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param \BloodBowl\ODM\Core\Race
     */
    public function setRace(Race $race)
    {
        $this->race = $race;
        return $this;
    }

    public function getPosition()
    {
         return $this->position;
    }

    public function setPosition( $position)
    {
         $this->position = $position;
         return $this;
    }
}
