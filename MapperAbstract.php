<?php
namespace BloodBowl\ODM\Core;

use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified;

class MapperAbstract implements DateCreated, LastModified
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\DateCreated;
    use \Shrikeh\DoctrineTools\Mapper\Traits\LastModified;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Identifiable;
}
