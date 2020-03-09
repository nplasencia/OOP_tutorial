<?php

namespace Nplasencia\Armors;

use Nplasencia\Armor;

class BronzeArmor implements Armor
{

	public function absorbDamage($damage)
	{
		return $damage / 2;
	}
}
