<?php
namespace Nplasencia;

use Nplasencia\Armors\MissingArmor;

class Unit
{
	protected $name;
	protected $hp = 40;
	protected $armor;
	protected $weapon;

	public function __construct($name, Weapon $weapon)
	{
		$this->name = $name;
		$this->weapon = $weapon;
		$this->armor = new MissingArmor();
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
        $attack = $this->weapon->createAttack();
        show($attack->getDescription($this, $opponent));
        $opponent->takeDamage($attack);
    }

	public function takeDamage(Attack $attack)
	{
		$this->hp = $this->hp - $this->armor->absorbDamage($attack);
		if ($this->hp < 0) {
			$this->hp = 0;
		}

		show("{$this->name} has {$this->hp} points of life");

		if ($this->hp <= 0) {
			show("{$this->name} has died");
			exit(); // Lesson purpose
		}
	}
}
