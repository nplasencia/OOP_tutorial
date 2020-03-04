<?php

class Person {

	protected $firstName;
	protected $lastName;
	protected $nickname;
	protected $changedName = 0;
	protected $birthDate;

	public function __construct( $firstName, $lastName, $birthDate)
	{
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
		$this->birthDate = date('d-m-Y', strtotime($birthDate));
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	/*
	 * If we created a getter and a setter to a property object is the same
	 * as declare this property as public. For that, we only permit change this
	 * property when we create the class.

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}
	*/

	public function getLastName()
	{
		return $this->firstName;
	}

	public function getNickname()
	{
		return $this->nickname;
	}

	public function setNickname($nickname)
	{
		if ($this->changedName >= 2) {
			throw new Exception(
				"You can't change a nickname more than 2 times"
			);
		} else if (strlen($nickname)>2 && $nickname != $this->firstName && $nickname !=$this->lastName) {
			$this->nickname = strtolower($nickname);
			$this->changedName++;
		}
	}

	public function getBirthDate()
	{
		return $this->birthDate;
	}

	public function getFullName()
	{
		return "$this->firstName $this->lastName";
	}

	public function getAge()
	{
		$d1 = new DateTime($this->birthDate);
		$d2 = new DateTime();
		$diff = $d2->diff($d1);
		return $diff->y;
	}
}

$person = new Person( 'Nauzet', 'Plasencia', '26-7-1986' );
$person->setNickname('NPLASENCIA');
$person->setNickname('NPLASENCIA2');
//$person->setNickname('NPLASENCIA3');
// VIEW PART

echo "Welcome {$person->getFullName()}. Your nickname is {$person->getNickname()}. You are {$person->getAge()} years old";