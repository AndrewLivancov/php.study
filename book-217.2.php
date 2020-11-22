<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Типы аргументов и возвращяемого значения
function sum(int $fst, int $snd) : int
{
	return $fst + $snd;
}
echo sum(2, 2), "<br />"; // 4
echo sum(2.5, 2.5); //4
  ?>
</body>
</html>