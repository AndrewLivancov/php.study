<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";
//dfdewe3w
#gfrre
/*defef3
erferfe
erf */
$txt = "Hello World!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
$txt1 = "W3Schools.com";
echo "I love $txt1 !";
echo "<hr>";
echo "I need " . $txt1 . "!";
echo "<br>";
echo $x + $y;
echo "<br>";
function myTest() {
	$z = 10; // Local Scope
	echo "<p>Variable x inside function is: $z</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";

function myTest1() {
	global $x, $y;
	$y = $x + $y;
}
myTest1();
echo $y;
function myTest2() {
	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest2();
echo "<hr>";
echo $y;
function myTest3() {
	static $c = 0;
	echo $c;
	$c++;
}
echo "<hr>";
myTest3();
echo "<br>";
myTest3();
echo "<br>";
myTest3();
echo "<hr>";
echo "<h2>PHP is Fun!</h2>";
echo "Hello World!<br>";
echo "I'm about tp learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

$txt3 = "Learn PHP";
$txt4 = "W3Schools.com";
$x3 = 5;
$x4 = 4;
echo "<h2>" . $txt3 . "</h2>";
echo "Study PHP at " . $txt4 . "<br>";
echo $x3 + $x4;
echo "<hr>";

print "<h2>PHP is Fun</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<hr>";

$txt5 = "Learn PHP<br>";
$txt6 = "W3Schools.com<br>";
print "<h2>" . $txt5 . "</h2>";
print "Study PHP at " . $txt6 . "<br>";
print $x + $y;
echo "<hr>";
$a = 5985;
var_dump($a);
echo "<hr>";
$s = 10.365;
var_dump($s);
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<hr>";
class Car {
	function Car() {
		$this->model = "VW";
	}
}
$herbie = new Car();
echo $herbie->model;
echo "<hr>";
$d = "hello world!";
$d = null;
var_dump($d);
echo "<hr>";
echo strlen("Hallo welt!");
echo "<br>";
echo str_word_count("Hallo welt!");
echo "<br>";
echo strrev('Hallo Welt!');
echo "<br>";
echo strpos("Hallo Welt", "Welt");
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");
echo "<hr>";

// Check if the type of a variable is integer 
$f = 5985;
var_dump(is_int($f));
echo "<br>";
// Check again...
$g = 59.85;
var_dump(is_int($g));
echo "<br>";
$h = 10.365;
var_dump(is_float($h));
echo "<br>";
// check if a numeric value is finite or infinite
$j = 1.9e411;
var_dump($j);
echo "<br>";
// Invalid calculation will return a NaN value 
$k = acos(8);
var_dump($k);
echo "<br>";

// Check if the variable is numeric 
$e = 5985;
var_dump(is_numeric($e));
echo "<br>";
$e = "5985";
var_dump(is_numeric($e));
echo "<br>";
$e = "59.85" + 100;
var_dump(is_numeric($e));
echo "<br>";
$e = "Hello";
var_dump(is_numeric($e));
echo "<br>";

//cast float tp int
$t = 23465.768;
$int_cast = (int)$t;
echo $int_cast;
echo "<br>";
// cast string to int 
$t = "23465.768";
$int_cast = (int)$t;
echo $int_cast;
echo "<hr>";
echo(pi());
echo "<hr>";
echo(min(0,150,30,20,-8,-200) . "<br>");
echo(max(0,150,30,20,-8,-200));
echo "<hr>";
echo(abs(-6.7));
echo "<hr>";
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9) . "<hr>");
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60) . "<hr>");
echo(rand() . "<hr>");
echo(rand(10,100) . "<hr>");
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<hr>";
// Create constant with case insensetive constant name
define("GREETINGS", "Welcome to W3Schools.ru!", true);
echo greetings;
echo "<hr>";
define("cars", ["Alfa Romeo",
"BMW", 
"Toyota"
]);
echo cars[0];
echo "<hr>";
define("BONJOUR", "Welcome to W3Schools.com!");

function myTests() {
	echo BONJOUR;
}

myTests();
echo "<hr>";
$t = date("H");
if ($t < "20") {
	echo "Have a good day!";
}
echo "<hr>";
$t1 = date("H");
if ($t1 < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
echo "<hr>";
$t2 = date("H"); 
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";
if ($t2 <"10") {
	echo "Have a good morning!";
} elseif ($t2 < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}
echo "<hr>";
$favcolor = "black";
switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default:
		echo "Your favorite color is neither red, blue, nor green!";
		echo "<hr>";
}
$u = 1;

while ($u <= 5) {
	echo "The number is: $u <br>";
	$u++;
}
$i = 0;
while ($i<= 100) {
	echo "The number is: $i <br>";
	$i+=10;
}
$o = 1;
do {
	echo "The number is: $o <br>";
	$o++;
} while ($o <= 5);
$p = 6;
do {
	echo "The number is: $p <br>";
	$p++;
} while ($p <= 5);
# For loop
for ($p1 = 0; $p1 <=10; $p1++) {
	echo "The number is: $p1 <br>";
}
for ($p2 = 0; $p2 <= 100; $p2+=10) {
	echo "The number is: $p2 <br>";
}
# foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
	echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($age as $x4 => $val) {
	echo "$x4 = $val<br>";
}
function writeMsg() {
	echo "Hello Bastard! <hr>";
}
writeMsg();
function familyName($fname) {
	echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
#next one 
function familyName1($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");

function addNumbers(int $a1, int $b1) {
	return $a1 + $b1;
}
echo addNumbers(5, "5 days");
echo "<hr>";

# Multidimensional array
$cars = array (
	array("Volvo", 22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

echo $cars[0][0]. ": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0]. ": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0]. ": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0]. ": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
</body>
</html>