<?php

namespace Nplasencia;

use Warcraft\Armor;

class EvasionArmor implements Armor
{

	public function absorbDamage($damage)
	{
		return rand(0, 1) * $damage;
	}
}
