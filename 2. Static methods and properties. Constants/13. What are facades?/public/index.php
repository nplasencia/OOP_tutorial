<?php

namespace Nplasencia;

use Nplasencia\Armors\SilverArmor;
use Nplasencia\Weapons\FireBow;
use Nplasencia\Languages\SpanishMessage;

require '../vendor/autoload.php';

Translator::set(new SpanishMessage());

Log::setLogger(new HtmlLogger());

$nau     = new Unit('Nau', new FireBow());
$silence = Unit::createSoldier('Silence')
               ->setArmor(new SilverArmor())
               ->setWeapon(new FireBow());

$nau->attack($silence);
$silence->attack($nau);

$nau->attack($silence);
$silence->attack($nau);
