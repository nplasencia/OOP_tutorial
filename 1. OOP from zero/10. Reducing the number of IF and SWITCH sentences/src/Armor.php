<?php

namespace Nplasencia;

abstract class Armor
{
	public function absorbDamage(Attack $attack)
    {
        if ($attack->isMagical()) {
            return $this->absorbMagicalAttack($attack);
        }
        return $this->absorbPhysicalAttack($attack);
    }

    public function absorbMagicalAttack(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbPhysicalAttack(Attack $attack)
    {
        return $attack->getDamage();
    }
}
