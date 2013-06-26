<?php
namespace BloodBowl\ODM\Core;

use \Doctrine\Common\Collections\ArrayCollection;
use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Roster;

class Team extends MapperAbstract
{
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
     * @var unknown
     */
    protected $inducements;
}
