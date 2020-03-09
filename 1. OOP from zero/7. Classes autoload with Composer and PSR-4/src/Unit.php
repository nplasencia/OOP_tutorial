<?php

namespace Nplasencia;

abstract class Unit
{
	protected $name;
	protected $hp = 40;
	protected $armor;

	public function __construct($name, Armor $armor)
	{
		$this->name = $name;
		$this->armor = $armor;
	}

	// Getters and setters

	public function getName()
	{
		return $this->name;
	}

	public function getHp()
	{
		return $this->hp;
	}

	public function setArmor($armor)
	{
		return $this->armor = $armor;
	}

	// Methods

	public function move($direction)
	{
		show("{$this->name} goes to $direction");
	}

	abstract public function attack(Unit $opponent);

	public function takeDamage($damage)
	{
		$this->hp = $this->hp - $this->absorbDamage($damage);
		if ($this->hp < 0) {
			$this->hp = 0;
		}

		show("{$this->name} has {$this->hp} points of life");

		if ($this->hp <= 0) {
			show("{$this->name} has died");
			exit(); // Lesson purpose
		}
	}

	protected function absorbDamage($damage)
	{
		if ($this->armor) {
			$damage = $this->armor->absorbDamage($damage);
		}

		return $damage;
	}
}
