<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

$caras = array (
	array("Volvo", 22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

echo $caras[0][0]. ": In stock: ".$caras[0][1].", sold: ".$caras[0][2].".<br>";
echo $caras[1][0]. ": In stock: ".$caras[1][1].", sold: ".$caras[1][2].".<br>";
echo $caras[2][0]. ": In stock: ".$caras[2][1].", sold: ".$caras[2][2].".<br>";
echo $caras[3][0]. ": In stock: ".$caras[3][1].", sold: ".$caras[3][2].".<br>";
?>

</body>
</html>