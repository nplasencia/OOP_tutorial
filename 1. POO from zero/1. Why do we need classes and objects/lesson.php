<?php

class Person {

	var $firstName;
	var $lastName;

	function __construct( $firstName, $lastName ) {
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
	}

	function fullName() {
		return "$this->firstName $this->lastName";
	}
}

$person1 = new Person( 'Nauzet', 'Plasencia' );
$person2 = new Person( 'Ramón', 'Julián' );


// VIEW PART

echo "Welcome {$person1->fullName()}. Your friend is {$person2->fullName()}";