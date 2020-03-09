<?php

namespace Nplasencia\Weapons;

use Nplasencia\Weapon;
use Nplasencia\Unit;

class BasicSword extends Weapon
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} attacks with his sword to {$opponent->getName()}";
    }
}
