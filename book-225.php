<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Вложенные функции
function father($a)
{
	echo $a, "<br />";
	function child($b) {
		echo $b + 1, "<br />";
		return $b * $b;
	}
	return $a * $a * child($a);
	// Фактически возвращает $a * $a * ($a+1) * ($a+1)
}
// Вызываем функции 
father(10);
child(30);
  ?>
</body>
</html>