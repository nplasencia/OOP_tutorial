<?php

namespace Nplasencia;

require '../vendor/autoload.php';

$nau = new Archer('Nau', new Armors\EvasionArmor());
$silence = new Soldier('Silence', new Armors\BronzeArmor());

$nau->attack($silence);

$armor = new Armors\SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);