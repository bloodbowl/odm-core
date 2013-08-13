<?php
namespace BloodBowl\ODM\Core;

use \Shrikeh\DoctrineTools\Mapper\Interfaces\DateCreated;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\LastModified;
use \Shrikeh\DoctrineTools\Mapper\Interfaces\Identifiable;

class MapperAbstract implements DateCreated, LastModified, Identifiable
{
    use \Shrikeh\DoctrineTools\Mapper\Traits\DateCreated;
    use \Shrikeh\DoctrineTools\Mapper\Traits\LastModified;
    use \Shrikeh\DoctrineTools\Mapper\Traits\Identifiable;
}
