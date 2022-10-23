<?php

class Bird
{
  var $commonName;
  var $food;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;

  function birdSong($value)
  {
    return $value . "<br>" . $this->commonName . "<br>" . $this->food . "<br>" . $this->nestPlacement . "<br>" . $this->clutchSize . "<br>" . $this->conservationLevel . "<br>";
  }
}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->clutchSize = '2 - 6 eggs';
$bird1->conservationLevel = 'Low';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadside';
$bird2->clutchSize = '3 - 4 eggs';
$bird2->conservationLevel = 'Low';

echo $bird1->birdSong($value = "Drink-Your-Tea") . "<br>";
echo $bird2->birdSong($value = "What! What!");
