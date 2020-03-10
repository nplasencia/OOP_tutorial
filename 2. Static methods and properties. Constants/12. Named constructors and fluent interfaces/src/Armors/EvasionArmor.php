<?php
namespace Nplasencia\Armors;

use Nplasencia\Armor;
use Nplasencia\Attack;

class EvasionArmor extends Armor
{
	public function absorbDamage(Attack $attack)
	{
		return rand(0, 1) * $attack->getDamage();
	}
}
