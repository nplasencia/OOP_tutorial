<?php

namespace Nplasencia\Weapons;

use Nplasencia\Unit;

class CrossBow extends Bow
{
    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throws an arrow to {$opponent->getName()}";
    }
}
