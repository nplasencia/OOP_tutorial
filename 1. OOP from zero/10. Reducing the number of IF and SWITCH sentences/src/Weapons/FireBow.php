<?php
namespace Nplasencia\Weapons;

use Nplasencia\Weapon;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $magical = true;
    protected $description = ':unit throws a fire arrow to :opponent';
}
