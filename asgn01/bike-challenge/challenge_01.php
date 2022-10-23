<?php

class Bicycle
{
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name()
  {
    return $this->description . " " . $this->brand . " " . $this->model . "  (" . $this->year . ")"; // I added the parenthesis after watching the solution video. I though it was a good idea.
  }

  function weight_lbs()
  {
    return "This bike weights " . floatval($this->weight_kg) * 2.20462266218 . " lbs."; // I didn't know about floatval() -- I used just to practice after looking at the solution.
  }

  function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.20462266218; // I didn't figured that one out on my own, I had to look at the solution.
  }
}

$fuji = new Bicycle;
$fuji->brand = 'Fuji';
$fuji->model = 'Mountain';
$fuji->year = '2022';
$fuji->description = 'brand new';
$fuji->weight_kg = 14;

echo $fuji->name() . "<br>", "<br>";
echo $fuji->weight_kg . "kg" . "<br>", "<br>";
echo $fuji->weight_lbs() . "<br>", "<br>";

echo $fuji->set_weight_lbs(30);
echo $fuji->weight_kg . "kg" . "<br>", "<br>";
echo $fuji->weight_lbs();
