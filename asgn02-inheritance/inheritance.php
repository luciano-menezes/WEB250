<?php

class Pet
{
  public $name;
  protected $age;
  private $weight = 0.00;

  public function petDescription()
  {
    return "My name is " . $this->name . ", " . "I'm " . $this->age . " years old" . " , I weight " . $this->get_weight() . " and I can ";
  }

  public function ageDetails()
  {
    $this->age;
  }

  public function showAge()
  {
    return $this->ageDetails();
  }

  public function set_weight($value)
  {
    return $this->weight = floatval($value);
  }

  public function get_weight()
  {
    return $this->weight . "lb";
  }
}

class Dog extends Pet
{
  public $barks;
  protected $age = 5;

  public function dogLanguage()
  {
    return $this->petDescription() . $this->barks . "." . "<br>";
  }
}

class Cat extends Pet
{
  public $meow;
  protected $age = 3;
  private $weight = 0.0;

  public function catLanguage()
  {
    return $this->petDescription() . $this->meow . "." . "<br>";
  }
}

$dog = new Dog;
$dog->name = 'Scooby doo';
echo $dog->showAge();
$dog->barks = 'bark' . "<br>";
$dog->set_weight(50);

$cat = new Cat;
$cat->name = 'Garfield';
echo $cat->showAge();
$cat->meow = 'meow';
$cat->set_weight(10);

echo $dog->dogLanguage();
echo $cat->catLanguage();
