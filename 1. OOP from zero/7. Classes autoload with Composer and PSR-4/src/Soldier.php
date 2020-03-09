<?php

namespace Nplasencia;

class Soldier extends Unit
{
	protected $damage = 40;

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his sword");
		$opponent->takeDamage($this->damage);
	}
}
