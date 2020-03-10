<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class CursedArmor extends Armor
{
	public function absorbDamage(Attack $attack)
	{
		return $attack->getDamage() * 2;
	}
}
