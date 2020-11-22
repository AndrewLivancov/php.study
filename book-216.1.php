<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Использование func_get_args()
function myecho()
{
	foreach (func_get_args() as $v) {
		echo "$v<br />\n"; // выводим элемент
	}
}
// Отображаем строки одну под другой
myecho("Меркурий", "Венера", "Земля", "Марс");
  ?>
</body>
</html>