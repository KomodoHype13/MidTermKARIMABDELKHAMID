<!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Lisence plate: <input type="text" name="lplate">
  Brand: <input type="text" name="brnd">
  Model: <input type="text" name="mdl">
  Model Year: <input type="text" name="mdlyr">
  Color: <input type="text" name="clr">
  <input type="submit">
</form>

<?php
echo "welcome to the midterm exam<br>";
include 'Automobile.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Lisence_plate =$_POST['lplate'];
    $Brand =$_POST['brnd'];
    $Model =$_POST['mdl'];
    $Model_year =$_POST['mdlyr'];
    $Color =$_POST['clr'];
}
?>

</body>
</html>