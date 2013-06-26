<?php
namespace BloodBowl\ODM\Core;

use \Shrikeh\DoctrineTools\Mapper\Traits\DateCreated as DateCreatedTrait;
use \Shrikeh\DoctrineTools\Mapper\Traits\LastModified as LastModifiedTrait;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated as DateCreatedInterface;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified as LastModifiedInterface;

class MapperAbstract implements DateCreatedInterface, LastModifiedInterface
{
    use DateCreatedTrait;
    use LastModifiedTrait;
}
