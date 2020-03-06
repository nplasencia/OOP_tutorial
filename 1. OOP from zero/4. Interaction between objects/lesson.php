<?php

function show($message)
{
	echo "<p>$message</p>";
}

abstract class Unit
{

	protected $name;
	protected $hp = 40;

	public function __construct($name)
	{
		$this->name = $name;
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

	private function setHp($hp)
	{
		$this->hp = $hp;

		show("{$this->name} has {$this->hp} point of life");
	}

	// Methods

	public function move($direction)
	{
		show("{$this->name} goes to $direction");
	}

	abstract public function attack(Unit $opponent);

	public function takeDamage($damage)
	{
		$this->setHp($this->hp - $damage);
		if ($this->hp <= 0) {
			$this->killed();
		}
	}

	public function killed()
	{
		show("{$this->name} has died");
	}
}

class Soldier extends Unit
{
	protected $damage = 40;

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his sword");
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		// The Soldier has an armor. For that, the damage could be the half or the third part.
		parent::takeDamage($damage/rand(2, 3));
	}

}

class Archer extends Unit
{
	protected $damage = 20;

	public function attack(Unit $opponent)
	{
		show("{$this->name} attacks {$opponent->getName()} with his arch");
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		// Sometimes the archer can avoid some damage.
		if (rand(0, 1)) {
			parent::takeDamage($damage);
		} else {
			show("{$this->name} has avoid the damage");
		}
	}
}

$nau = new Archer('Nau');
$sileence = new Soldier('Sileence');

$nau->attack($sileence);
$nau->attack($sileence);
$sileence->attack($nau);