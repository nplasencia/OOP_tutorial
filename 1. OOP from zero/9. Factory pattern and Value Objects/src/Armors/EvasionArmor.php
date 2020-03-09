<?php

namespace Nplasencia\Armors;

use Nplasencia\Armor;

class EvasionArmor implements Armor
{

	public function absorbDamage($damage)
	{
		return rand(0, 1) * $damage;
	}
}
