<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>asgn03-Static</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Inheritance Examples</h1>

    <?php
    include 'Bird.php';

    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . $bird->song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . $fly_catcher->name . ' on breeding grounds is "' . $fly_catcher->song . '".</p>';

    $kiwi = new Kiwi;
    $kiwi->flying = "no";
    echo "<p>The " . $fly_catcher->name . " " . $fly_catcher->can_fly() . ".</p>";
    echo "<p>The " . $kiwi->name . " " . $kiwi->can_fly() . ".</p>";

    echo "<hr>";

    echo "<p><strong>Before using the create method</p></strong>";

    echo "Bird count: " . Bird::$instance_count . "<br>";
    echo "Flycatcher count: " . YellowBelliedFlyCatcher::$instance_count . "<br>";
    echo "Kiwi count: " . Kiwi::$instance_count;

    $bird = Bird::create();
    $fly_catcher = YellowBelliedFlyCatcher::create();
    $kiwi = Kiwi::create();

    echo "<p><strong>After using the create method</p></strong>";

    echo "Bird count: " . Bird::$instance_count . "<br>";
    echo "Flycatcher count: " . YellowBelliedFlyCatcher::$instance_count . "<br>";
    echo "Kiwi count: " . Kiwi::$instance_count . "<br>";

    echo "<hr>";

    echo "The number of eggs laid by the Fly Catcher: " . YellowBelliedFlyCatcher::eggNumber();
    ?>
</body>

</html>