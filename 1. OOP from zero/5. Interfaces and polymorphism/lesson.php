<?php

function show($message)
{
	echo "<p>$message</p>";
}

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

class Soldier extends Unit
{
	protected $damage = 40;

	public function __construct($name, $armor)
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

class Archer extends Unit
{
	protected $damage = 20;

	public function __construct($name, $armor)
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

interface Armor
{
	public function absorbDamage($damage);
}

class BronzeArmor implements Armor
{
	public function absorbDamage($damage)
	{
		return $damage / 2;
	}
}

class SilverArmor implements Armor
{
	public function absorbDamage($damage)
	{
		return $damage / 3;
	}
}

class CursedArmor implements Armor
{
	public function absorbDamage($damage)
	{
		return $damage * 2;
	}
}

class EvasionArmor implements Armor
{
	public function absorbDamage($damage)
	{
		return rand(0, 1) * $damage;
	}
}

$nau = new Archer('Nau', new EvasionArmor());
$silence = new Soldier('Silence', new BronzeArmor());

$nau->attack($silence);

$armor = new SilverArmor();
$silence->setArmor($armor);

$nau->attack($silence);
$silence->attack($nau);