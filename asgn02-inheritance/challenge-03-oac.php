<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name()
  {
    return $this->description . " " . $this->brand . " " . $this->model . "  (" . $this->year . ")"; // I added the parenthesis after watching the solution video. I though it was a good idea.
  }

  public function weight_lbs()
  {
    return "This bike weights " . floatval($this->weight_kg) * 2.20462266218 . " lbs."; // I didn't know about floatval() -- I used just to practice after looking at the solution.
  }

  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.20462266218; // I didn't figured that one out on my own, I had to look at the solution.
  }

  public function wheel_details() // I didn't use a conditional. After looking at it, I can see how his solution can be more efficient and less bloated.
  {
    return "It has " . $this->wheels . " wheels" . ".";
  }
  public function show_wheel_numbers()
  {
    return $this->wheel_details();
  }

  public function set_weight_kg($value)
  {
    return $this->weight_kg = floatval($value);
  }

  public function get_weight_kg()
  {
    return $this->weight_kg . "kg";
  }
}

class Unicycle extends Bicycle
{
  protected $wheels = 1;

  public function wheel_details() // I didn't use a conditional. After looking at it, I can see how his solution can be more efficient and less bloated.
  {
    return "It has " . $this->wheels . " wheel" . ".";
  }
}


$bike = new Bicycle;
$bike->brand = 'bike';
$bike->model = 'Mountain';
$bike->year = '2022';
$bike->description = 'brand new';

$unicycle = new Unicycle;
$unicycle->brand = 'Nimbus';
$unicycle->model = 'Freestyle';
$unicycle->year = '2021';
$unicycle->description = 'brand new';

echo "<b>Bike Info</b>" . "<br><br>";
echo $bike->name() . "<br>", "<br>";

$bike->set_weight_kg(14);
echo $bike->get_weight_kg() . "<br>", "<br>";
echo $bike->weight_lbs() . "<br>", "<br>";

$bike->set_weight_lbs(30);
echo $bike->get_weight_kg() . "<br>", "<br>";
echo $bike->weight_lbs() . "<br>", "<br>";

echo $bike->show_wheel_numbers() . "<br><br>";

echo "<b>Unicycle Info</b>" . "<br><br>";
echo $unicycle->name() . "<br>", "<br>";

$unicycle->set_weight_kg(6);
echo $unicycle->get_weight_kg() . "<br>", "<br>";;
echo $unicycle->weight_lbs() . "<br>", "<br>";

$unicycle->set_weight_lbs(13);
echo $unicycle->get_weight_kg() . "<br>", "<br>";
echo $unicycle->weight_lbs() . "<br>", "<br>";

echo $unicycle->show_wheel_numbers();
