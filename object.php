<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model,$number) {
    $this->color = $color;
    $this->model = $model;
	$this->number = $number;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . " " . $this->number . "!";
  }
}

$myCar = new Car("black", "Volvo","2223");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota","23434");
echo $myCar -> message();
?>

</body>
</html>
