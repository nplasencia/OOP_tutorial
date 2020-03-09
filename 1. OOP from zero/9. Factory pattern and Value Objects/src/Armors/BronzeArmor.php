<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class BronzeArmor implements Armor
{
	public function absorbDamage(Attack $attack)
	{
		return $attack->getDamage() / 2;
	}
}
