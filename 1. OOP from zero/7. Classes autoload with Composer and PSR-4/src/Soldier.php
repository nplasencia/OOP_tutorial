<?php

namespace Nplasencia;

class Soldier extends Unit
{
	protected $damage = 40;

	public function __construct($name, Armor $armor)
	{
		parent::__construct($name, $armor);
	}

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his sword");
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		parent::takeDamage($damage);
	}
}