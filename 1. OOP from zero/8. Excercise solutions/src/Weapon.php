<?php

namespace Nplasencia;


abstract class Weapon
{
    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    public abstract function getDescription(Unit $attacker, Unit $opponent);
}