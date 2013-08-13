<?php
namespace BloodBowl\ODM\Core\Traits;

trait Describable
{
    protected $description;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
