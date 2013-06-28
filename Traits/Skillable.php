<?php
namespace BloodBowl\ODM\Core\Traits;

use \BloodBowl\ODM\Core\Rules\Skill;
use \Doctrine\Common\Collections\ArrayCollection;

trait Skillable
{
    /**
     *
     * A collection of skills the player has.
     *
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $skills;

    public function getSkills()
    {
        return $this->getSkillCollection();
    }

    protected function getSkillCollection()
    {
        if (!$this->skills instanceof ArrayCollection) {
            $this->skills = new ArrayCollection();
        }
        return $this->skills;
    }

    public function setSkills($skills)
    {
        foreach ($skills as $skill) {
            $this->addPlayerSkill($skill);
        }
        return $this;
    }

    public function addSkill(Skill $skill)
    {
        $skills = $this->getSkillCollection();
        $skills[$skill->getId()] = $skill;
        return $this;
    }

    public function removeSkill(Skill $skill)
    {
        return $this->removeSkillById($skill->getId());
    }

    public function removeSkillById($id)
    {
        $skills = $this->getSkillCollection();
        unset($skills[$id]);
        return $this;
    }
}
