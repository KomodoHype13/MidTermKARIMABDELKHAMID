<!DOCTYPE html>
<html>
<body>
<?php
echo "welcome to the midterm exam<br>";
include 'Automobile.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Lisence_plate =$_POST['lplate'];
    $Brand =$_POST['brnd'];
    $Model =$_POST['mdl'];
    $Model_year =$_POST['mdlyr'];
    $Color =$_POST['clr'];
    $car = new Automobile($Lisence_plate,$Brand,$Model,$Model_year,$Color);
}
?>

Lisence Plate: <?php print $car->$Lisence_plate ?>

Brand: <?php print $car->$Brand ?>

The model of the car: <?php print $car->$Model ?>

The year of the mode: <?php print $car->$Model_year ?>

The color: <?php print $car->$Color ?>

</body>
</html>