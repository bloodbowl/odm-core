<?php
namespace BloodBowl\ODM\Core\Tests\Races;

use \BloodBowl\ODM\Core\Tests\ODMCoreTestAbstract;
use \BloodBowl\ODM\Core\Rules\Skill;
use \BloodBowl\ODM\Core\Rules\Race;
use \BloodBowl\ODM\Core\Stats;
use \Doctrine\Common\Collections\ArrayCollection;

class RaceTest extends ODMCoreTestAbstract
{
    /**
     *
     * @return array
     */
    public function providerGetRaces()
    {
        $races = $this->getContainer()['fixture.races']['races'];

        foreach ($races as $race) {
            $fixtures[] = array($race);
        }
        return $fixtures;
    }

    /**
     * @dataProvider providerGetRaces
     */
    public function testRaceGetters($fixture)
    {

        $race = new Race();
        $race->setName($fixture['name']);
        $this->assertSame($fixture['name'], $race->getName());

        $stats = new Stats();
        $race->setStats($stats);
        $this->assertSame($stats, $race->getStats());
        $skill = new Skill();
        $skill->setId($fixture['id']);
        $race->addSkill($skill);
        $skills = $race->getSkills();
        $this->assertInstanceOf('\Doctrine\Common\Collections\ArrayCollection', $skills);
        $this->assertSame(1, count($skills));
        $this->assertSame($skill, $skills[$fixture['id']]);
    }
}
