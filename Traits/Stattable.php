<?php
namespace BloodBowl\ODM\Core\Traits;

use \BloodBowl\ODM\Core\Stats;

trait Stattable
{
    /**
     * @var \BloodBowl\ODM\Core\Stats
     */
    protected $stats;

    /**
     * @return the Stats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param  $stats
     */
    public function setStats(Stats $stats)
    {
        $this->stats = $stats;
        return $this;
    }
}
