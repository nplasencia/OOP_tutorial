<?php

namespace Nplasencia;

require '../vendor/autoload.php';

$nau = new Archer('Nau');
$silence = new Soldier('Silence');

$nau->attack($silence);

$armor = new Armors\SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);