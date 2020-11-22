<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Возврат массива
	function silly()
	{
		return [1, 2, 3];
	}
	// Присваивает массиву значение array [1,2,3]
	$arr = Silly();
	var_dump($arr); // Выводим массив
	// Присваиваем переменным $a, $b, $c первые значения из списка
	list ($a, $b, $c) = Silly();
	// Допустимо, начиная с PHP 5.4
	echo Silly()[2]; // 3
  ?>
</body>
</html>