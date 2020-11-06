<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
for ($i = 0; $i < count($matrix); $i++) {
	for ($j = 0; $j < count($matrix[$i]); $j++) {
		if ($matrix[$i][$j] == 0) break(2);
	}
}
if ($i < 10) echo 'Найден нулевой элемент в матрице!';
?>
</body>
</html>