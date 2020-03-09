<?php

namespace Nplasencia;

class Archer extends Unit
{
	protected $damage = 20;

	public function __construct($name, Armor $armor)
	{
		parent::__construct($name, $armor);
	}

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his arch");
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		parent::takeDamage($damage);
	}
}
