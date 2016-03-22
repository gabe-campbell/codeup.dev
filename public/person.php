<?php

class Person
{
  public $firstName;
  public $lastName;

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFullName()
  {
    return $this->firstName . " " . $this->lastName;
  }
}

$cameron = new Person('Cameron', 'Holland');
echo $cameron->firstName;
echo $cameron->getFullName();

$ben = new PErson('Ben', 'Batschelet');
echo "Howdy, " . $ben->firstName;
