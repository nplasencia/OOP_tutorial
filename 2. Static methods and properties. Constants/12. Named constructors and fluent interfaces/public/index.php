<?php

namespace Nplasencia;

use Nplasencia\Armors\SilverArmor;
use Nplasencia\Weapons\FireBow;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack'   => ':unit throws an arrow to :opponent',
    'BasicSwordAttack' => ':unit attacks with his sword to :opponent',
    'CrossBowAttack'   => ':unit throws an arrow to :opponent using the crossbow',
    'FireBowAttack'    => ':unit throws a fire arrow to :opponent',
    'Attack'           => ':unit attacks :opponent',
]);

$nau     = new Unit('Nau', new FireBow());
$silence = Unit::createSoldier('Silence')
               ->setArmor(new SilverArmor())
               ->setWeapon(new FireBow());

$nau->attack($silence);
$silence->attack($nau);

$nau->attack($silence);
$silence->attack($nau);
