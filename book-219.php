<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Глобальные переменные в функции
$monthes = [
	1 => "Январь",
	2 => "Февраль",
	// ... 
	12 => "Декабрь"
];
// Возвращает название месяца по его номеру. Нумерация начинается с 1!
function getMonthName($n)
{
	global $monthes;
	return $monthes[$n];
}
// Применение
echo getMonthName(2); // выводит "Февраль"
  ?>
</body>
</html>