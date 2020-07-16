<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Простейший PHP сценарий</title>
	<meta charset="utf-8">

<style>

	body {color: yellow; background-color: black;}
	ul {color: orange;}
</style>
</head>
<body>
<h1>Здравствуйте!</h1>
<p>
	<?php 
$dat = date("d.m.y");
$tm  = date("h:i:s");
echo "Текущая дата: $dat года<br />";
echo "Текущее время: $tm<br />\n";
echo "А вот квадраты и кубы первых 5 натуральных чисел:<br />";
echo "<ul>\n";
for ($i = 1; $i <= 5; $i++) {
	echo "<li>$i в квадрате = " . ($i * $i);
	echo ", $i в кубе = " . ($i * $i *$i) . "</li>\n";
	}

echo PHP_INT_MAX;
echo "<br>";
echo PHP_INT_SIZE;
echo "<br>";
echo 1.8e307;
echo "<br>";
echo 1.8e308;
echo "<br>";
echo sqrt(-1);
echo "<hr>";
$a = array(
0 => "Нулевой элемент",
"surname" => "Гейтс",
"name" => "Билл");
echo $a["surname"];
echo "<br>";
$a["1"] = "Первый элемент";
$a["name"] = "Вильям";
echo $a["name"];
echo "<br>";
echo $a[1];
echo "<br>";
$b = true;
echo "b: $b<br />";
$b++;
echo "b: $b<br />";
if (isset($b))
echo "Такая переменная есть. Ее значение $b";
echo "<br>";
$A1 = "HELLO THERE!";
echo $A1;
echo "<br>";
echo gettype($a);
echo "<br>";
$value = 3.14;
echo "<br>";
echo (int)$value . " (" . gettype((int)$value)  . ")";
echo "<br>";
echo (string)$value . "(" .gettype((string)$value) .")";
echo "<br>";
echo (boolean)$value . " (" .gettype((boolean)$value) .")";
echo "<br>";
$a = 0; $b = 1;
if ($a = $b) echo "а и b одинаковы";
else echo "a и b различны";
echo "<br>";
$a = 10;
$b =& $a;
$b = 0;
echo "b = $b, a = $a";
echo "<br>";
echo "<br>";

$A = array(
'ресторан' => 'Китайский сюрприз',
'девиз' => 'Nosce the computers.'
);
$r = & $A['ресторан'];
$r = "Восход луны";
echo $A['ресторан'];
echo "<br>";

$B = array(
'вилка' => '271 руб. 82 коп',
'сковорода' => '818 руб. 28 коп'
);
$b = & $B['ложка'];
echo "Элемент с индексом 'ложка': ".$B['ложка']."<br />";
echo "Тип несуществующего элемента 'ложка': ".gettype($B['ложка']);
echo "<br>"; 
class AgenthSmith {}
$first = new AgenthSmith();
$first->mind = 0.123;
$second = $first;
$second->mind = 100;
echo "First mind: {$first->mind}, second: {$second->mind}";
echo "<br>";

define("pi", 3.14);
define("str", "Test string");
echo sin(pi / 4);
echo "<br>";
echo str;
echo "<br>";
$index = mt_rand(1, 10);
$name = "VALUE($index)";
define($name, 1);
echo constant($name);
echo "<br>";
$a3  = array('a'=>'apple', 'b'=>'banana', 'c'=>array('x', 'y', 'z'));
echo "<pre>"; print_r ($a3); echo "</pre>";
echo "<br>";
$a2 = array(1, array ("a", "b"));
echo "<pre>"; var_dump($a2); echo "</pre>";
echo "<br>";

class SomeClass {
	private $x = 100;
}
$a = array(1, array ("Programs hacking programs. Why?", "д'Артаньян"));
echo "<pre>"; var_export($a); echo "</pre>";
$obj = new SomeClass();
echo "<pre>"; var_export($obj); echo "</pre>";
$SOME = "Hell";
echo $SOME."o world!";
echo "<br>";
echo "($SOME)o world!";
echo "<br>";
echo "$(SOME)o world!";
echo "<br>";

$action = array(
"left" => "survive", 
"right" => "kill them all"
);
echo "Выбранный элемент: {$action['left']}";
echo "<br>";
echo "Выбранный элемент: $action[right]";
echo "<br>";
echo 2 ** 0.5;
echo "<br>";
$a = 10;
$b  = $a++;
echo "a = $a, b = $b";
echo "<br>";
$a = 10;
$b = --$a;
echo "a = $a, b = $b";
echo "<br>";

define('RECTANGLE', 2);
define('GREEN', 8);
$angle = 45 << 5;
$height = 15 << 14;
$width = 15 << 23;
echo RECTANGLE | GREEN | $angle | $height | $width;
echo "<br>";
$hundred = 100;
if ($hundred == 1)
echo "хм... переменная равна 1!<br />";
echo "<br>";
if (hundred == true) 
echo "Переменная истинна!<br />";
echo "<br>";
if (((int)"Universe") == 0) echo "Совпадение!";
echo "<br>";
$x = array(1,2,"3");
$y = array(1,2,3);
echo "Равны ли два массива? ".($x == $y);
echo "<br>";
$x = array(1,2,true);
$y = array(1,2,3);
echo "Равны ли два массива? ".($x == $y);
echo "<br>";
$smit = new AgenthSmith();
$wesson = new AgenthSmith();
echo ($smit == $wesson);
echo "<br>";
$int = 10;
$string = "10";
if ($int == $string) echo "переменные равны";
echo "<br>";
$zero = 0;
$tsss = "";
if ($zero == $tsss) echo "переменные равны";
echo "<br>";
$zero = 0;
$tsss = "";
if ($zero === $tsss) echo "переменные эквивалентны";
echo "<br>";
$yep = array("реальность", true);
$nein = array("реальность", "иллюзорна");
if ($yep == $nein) echo "Два массива равны";
if ($yep === $nein) echo "Два массива эквивалентны";
echo "<br>";
if ($smit == $wesson) echo "Обьекты равны. <br>";
if ($smit === $wesson) echo "Обьекты эквивалентны";
echo "<br>";

function cmp ($a, $b)
	{
	if ($a == $b) return 0;
	if ($a < $b) return -1;
	if ($a > $b) return 1;
	}
$arr = array(3,1,7,6,9,4);
usort($arr, 'cmp');
print_r($arr);
echo "<br>";

$arr = array(3,1,7,6,9,4);
usort($arr, function($a, $b) { return $a <=> $b; });
print_r($arr);
echo "<br>";

echo "<br>";
$x = -17;
$x = $x < 0 ? -$x : $x;
echo $x;
echo "<br>";
$x = $x ?: 1;
echo $x;
echo "<br>";
$x = null;
$y = null;
$z = 3;
var_dump($x ?? $y ?? $z);
$val = $_REQUEST["doGo"]. ?? false;
?>

</ul>
</p>
</body>
</html>
