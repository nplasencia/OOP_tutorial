<?php

namespace Nplasencia\Armors;

use Nplasencia\Armor;

class CursedArmor implements Armor
{

	public function absorbDamage($damage)
	{
		return $damage * 2;
	}
}
