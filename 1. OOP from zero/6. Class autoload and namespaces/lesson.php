<?php

namespace Nplasencia;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
	if (strpos($className, 'Nplasencia\\') == 0) {
		$className = str_replace('Nplasencia\\', '', $className);

		if (file_exists("src/$className.php")) {
			require "src/$className.php";
		}
	}
});

$nau = new Archer('Nau', new EvasionArmor());
$silence = new Soldier('Silence', new BronzeArmor());

$nau->attack($silence);

$armor = new SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);