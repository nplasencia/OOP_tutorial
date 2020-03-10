<?php
namespace Nplasencia;

use Nplasencia\Armors\MissingArmor;
use Nplasencia\Armors\BronzeArmor;
use Nplasencia\Weapons\BasicSword;

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

	public static function createSoldier($name)
    {
        $unit = new Unit($name, new BasicSword());
        $unit->setArmor(new BronzeArmor());

        return $unit;
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
		$this->armor = $armor;
		return $this;
	}

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
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
