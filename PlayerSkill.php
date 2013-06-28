<?php
namespace BloodBowl\ODM\Core;

use \BloodBowl\ODM\Core\MapperAbstract;
use \BloodBowl\ODM\Core\Player;
use \BloodBowl\ODM\Core\Rules\Skill;

class PlayerSkill extends MapperAbstract
{

    /**
     * @var \BloodBowl\ODM\Core\Player
     */
    protected $player;

    /**
     * @var \BloodBowl\ODM\Core\Skill
     */
    protected $skill;


    public function getPlayer()
    {
        return $this->player;
    }

    public function setPlayer(Player $player)
    {
        $this->player = $player;
        return $this;
    }

    public function getSkill()
    {
        return $this->skill;
    }

    public function setSkill(Skill $skill)
    {
        $this->skill = $skill;
        return $this;
    }
}