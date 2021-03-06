<?php

namespace Nplasencia;


abstract class Weapon
{
    protected $damage = 0;
    protected $magical = false;
    protected $description = ':unit attacks :opponent';

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }
}
