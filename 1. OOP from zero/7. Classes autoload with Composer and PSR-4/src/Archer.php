<?php

namespace Nplasencia;

class Archer extends Unit
{
	protected $damage = 20;

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his arch");
		$opponent->takeDamage($this->damage);
	}
}
