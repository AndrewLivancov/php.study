<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Переменное число параметров функции (устаревший способ)
function myecho()
{
	for ($i = 0; $i < func_num_args(); $i++) {
		echo func_get_arg($i)."<br />\n"; // выводим элемент
	}
}
// Отображаем строки одну под другой
myecho("Меркурий", "Венера", "Земля", "Марс");
  ?>
</body>
</html>