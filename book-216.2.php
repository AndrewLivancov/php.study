<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Переменное число параметров функции (современный способ)
function myecho(...$planets)
{
	foreach ($planets as $v) {
		echo "$v<br />\n"; // выводим элемент
	}
}
// Отображаем строки одну под другой
myecho("Меркурий", "Венера", "Земля", "Марс");
  ?>
</body>
</html>