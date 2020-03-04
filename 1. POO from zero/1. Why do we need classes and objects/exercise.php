<?php

class Car {

	var $colour;
	var $doorsNumber;
	var $speed;

	function __construct($colour, $doorsNumber) {
		$this->colour = $colour;
		$this->doorsNumber = $doorsNumber;
		$this->speed = 0;
	}

	function accelerate() {
		$this->speed++;
	}

	function honkTheHorn() {
		return 'Piiiiiiiiiiiiiiiiii';
	}

	function getNumberOfDoors() {
		if ($this->doorsNumber == 1) {
			return 'only one door';
		} else if ($this->doorsNumber > 1){
			return "$this->doorsNumber doors";
		} else {
			return 'without doors';
		}
	}

	function getDescription() {
		return "This is a $this->colour car with {$this->getNumberOfDoors()}. Its speed now is $this->speed.";
	}

}

$car = new Car('white', 5);

// VIEW
echo($car->getDescription().'<br>');
echo($car->honkTheHorn().'<br>');
$car->accelerate();
echo($car->getDescription().'<br>');