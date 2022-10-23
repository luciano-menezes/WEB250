<?php

class Pet
{
  var $name;
  var $age;
  function petDescription()
  {
    return "My name is " . $this->name . ", " . "I'm " . $this->age . " and I can ";
  }
}

class Dog extends Pet
{
  var $barks;

  function dogLanguage()
  {
    return $this->petDescription() . $this->barks . "." . "<br>";
  }
}

class Cat extends Pet
{
  var $meow;

  function catLanguage()
  {
    return $this->petDescription() . $this->meow . ".";
  }
}

$dog = new Dog;
$dog->name = 'Scooby doo';
$dog->age = '5 years old';
$dog->barks = "I bark";

$cat = new Cat;
$cat->name = 'Garfield';
$cat->age = '3 years old';
$cat->meow = 'I meow';

echo $dog->dogLanguage();
echo $cat->catLanguage();
