<?php

namespace Nplasencia;

abstract class Unit
{
	protected $name;
	protected $hp = 40;
	protected $armor;
	protected $weapon;

	public function __construct($name, Weapon $weapon)
	{
		$this->name = $name;
		$this->weapon = $weapon;
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

	public function setArmor(Armor $armor = null)
	{
		return $this->armor = $armor;
	}

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
    }

	// Methods

	public function move($direction)
	{
		show("{$this->name} goes to $direction");
	}

	public function attack(Unit $opponent)
    {
        show($this->weapon->getDescription($this, $opponent));
        $opponent->takeDamage($this->weapon->getDamage());
    }

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
