<?php

abstract class Unit
{

	protected $alive = true;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function move($direction)
	{
		echo "<p>{$this->name} goes to $direction</p>";
	}

	abstract public function attack($opponent);
}

class Soldier extends Unit
{

	public function attack($opponent)
	{
		echo "<p>{$this->name} attacks $opponent with his sword</p>";
	}
}

class Archer extends Unit
{

	public function attack($opponent)
	{
		echo "<p>{$this->name} attacks $opponent with his archer</p>";
	}
}

$unity = new Soldier('nplasencia');
$unity->move('right');
$unity->attack('Silence');