<?php
namespace Nplasencia;

use Nplasencia\Weapons\BasicSword;
use Nplasencia\Weapons\FireBow;

require '../vendor/autoload.php';

$nau = new Unit('Nau', new FireBow());
$silence = new Unit('Silence', new BasicSword());

$nau->attack($silence);

$armor = new Armors\SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);