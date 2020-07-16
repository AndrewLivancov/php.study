<?php declare(strict_types=1); // strict reuqirement ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function setHeight(int $minheight = 50) {
	echo "The height is: $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum(int $x, int $y) {
	$z = $x + $y;
	return $z;
}
echo "5 + 10 = " . sum(5,10) ."<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";
function addnumbers(float $a, float $b) : float {
	return $a + $b;
}
echo addnumbers(1.2, 5.2);
echo "<hr>";
function addNumber(float $a1, float $b1) : int {
	return (int)($a1 + $b1);
}
echo addNumber(1.2, 5.2);
echo "<hr>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
echo count($cars);
echo "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
$arrlength = count($cars);

for($a = 0; $a <$arrlength; $a++) {
	echo $cars[$a];
	echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br>";
foreach($age as $b => $b_value) {
	echo "key=" . $b . ", Value=" . $b_value;
	echo "<br>";
}
# Multidimensional array
$cars1 = array(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold: ".$cars1[0][2].".<br>";
echo $cars1[1][0].": In stock: ".$cars1[1][1].", sold: ".$cars1[1][2].".<br>";
echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold: ".$cars1[2][2].".<br>";
echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold: ".$cars1[3][2].".<br>";

for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$cars1[$row][$col]."</li>";
	}
	echo "</ul>";
}

# Sorting Arrays
$cars2 = array("Volvo", "BMW", "Toyota");
sort($cars2);

$clength = count($cars2);
for($x = 0; $x < $clength; $x++) {
	echo $cars2[$x];
	echo "<br>";
}
$numbers = array(4,6,2,22,11);
sort($numbers);

$arrlength = count($numbers);
for($y = 0; $y < $arrlength; $y++) {
	echo $numbers[$y];
	echo "<br>";
}

$cars3 = array("Volvo", "BMW", "Toyota");
rsort($cars3);

$clength3 =  count($cars3);
for($x = 0; $x < $clength3; $x++) {
	echo $cars[$x];
	echo "<br>";
}
$numbers1 = array(4,6,2,22,11);
rsort($numbers1);

$arrlength1 = count($numbers1);
for($xx = 0; $xx < $arrlength1; $xx++) {
	echo $numbers1[$xx];
	echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $q => $q_value) {
	echo "Key=" . $q . ", Value=" . $q_value;
	echo "<br>";
}
# Sort Array (Ascending Order), According to Key - ksort()
$age1 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $w => $w_value) {
	echo "Key=" . $w . ", Value=" . $w_value;
	echo "<br>";
}
# Sort Array (Descending Order), According to Value - arsort()
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age2);

foreach($age2 as $e => $e_value) {
	echo "key=" . $e . ", Value=" . $e_value;
	echo "<br>";
}
# Sort Array (Descending Order), According to Key - krsort()
$age3 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age3);

foreach($age3 as $r => $r_value) {
	echo "Key=" . $r . ", Value=" . $r_value;
	echo "<br>";
}
###
$x11 = 75;
$y11 = 25;

function addition() {
	$GLOBALS['z'] = $GLOBALS['x11'] + $GLOBALS['y11'];
}
addition();
echo $z;
?>

</body>
</html>