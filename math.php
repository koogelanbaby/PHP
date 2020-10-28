<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
$z = 20;

function myTest() {
  global $x, $y, $z;
  $y = $x + $y*$z;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>