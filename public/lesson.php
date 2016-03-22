<?php

class Person
{
  public $firstName;
  public $lastName;

  public static $population = 7200000000;

  public static function getScientificName ()
  {
    return 'Homo sapien';
  }

  publicstatic function birth()
  {
    self::$population += 1;
  }
}

echo Person::$population . PHP_EOL;
echo Person::getScientificName() . PHP_EOL;

$zach = new Person();
$zach->firstName = 'Zach';

