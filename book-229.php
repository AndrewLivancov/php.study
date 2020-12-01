<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Использование call_user_func_array()
// Вывод всех параметров на отдельных строках
{
	foreach ($str as $v) {
		echo "$v<br />\n"; // выводим элемент 
	}
}
// То же самое, но предваряет параметры указанным числом пробелов
function tabber($spaces, ...$planets)
{
	// подготавливаем аргументы для myecho()
	$new = [];
	foreach ($planets as $planet) {
		$new[] = str_repeat("&nbsp", $spaces).$planet;
	}
	// вызываем myecho() с новыми параметрами
	call_user_func_array("myecho", $new);
}
// отображаем строки одну под другой
	tabber(10, "Меркурий", "Венера", "Земля", "Марс");
  ?>
</body>
</html>