<?php

namespace Nplasencia\Armors;

use Nplasencia\Armor;

class SilverArmor implements Armor
{

	public function absorbDamage($damage)
	{
		return $damage / 3;
	}
}
