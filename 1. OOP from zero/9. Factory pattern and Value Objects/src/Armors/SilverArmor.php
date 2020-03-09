<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class SilverArmor implements Armor
{

	public function absorbDamage(Attack $attack)
	{
	    if (!$attack->isMagical())
		    return $attack->getDamage() / 3;
	    return$attack->getDamage();
	}
}
