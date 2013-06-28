<?php
namespace BloodBowl\ODM\Core\Tests;

use \PHPUnit_Framework_TestCase as TestCase;

class ODMCoreTestAbstract extends TestCase
{
    protected $container;

    protected function getContainer()
    {
        if (!$this->container) {
            $this->container = require_once(__DIR__ . '/container.php');
        }
        return $this->container;
    }
}
