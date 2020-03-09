<?php

namespace Nplasencia;

use Nplasencia\Weapons\BasicSword;

class Soldier extends Unit
{
	public function __construct($name)
    {
        parent::__construct($name, new BasicSword());
    }
}
