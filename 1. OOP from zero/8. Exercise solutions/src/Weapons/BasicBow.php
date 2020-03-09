<?php

namespace Nplasencia\Weapons;

use Nplasencia\Unit;

class BasicBow extends Bow
{
    protected $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} throws an arrow to {$opponent->getName()}";
    }
}