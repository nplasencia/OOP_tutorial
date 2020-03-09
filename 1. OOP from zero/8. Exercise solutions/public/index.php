<?php

namespace Nplasencia;

use Nplasencia\Weapons\BasicSword;
use Nplasencia\Weapons\CrossBow;

require '../vendor/autoload.php';

$nau = new Archer('Nau', new CrossBow());
$silence = new Soldier('Silence', new BasicSword());

$nau->attack($silence);

$armor = new Armors\SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);