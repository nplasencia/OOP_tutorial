<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class MissingArmor extends Armor
{
	public function absorbDamage(Attack $attack)
	{
		return $attack->getDamage();
	}
}
