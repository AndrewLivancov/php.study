<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$a = 100; // Глобальная переменная равная 100
function test ($a)
{
	echo $a, "<br />"; // выводим значение параметра $a
// Параметр $a не имеет к глобальной переменной $a никакого отношения!
$a++; // изменяется локальная копия значения, переданного в $a
}
test(1); //  Выводит 1
echo $a; // Выводит 100 - глобальная переменная $a не изменилась

  ?>
</body>
</html>