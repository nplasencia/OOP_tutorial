<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalAttack(Attack $attack)
    {
        return $attack->getDamage()/3;
    }
}
