<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Передача параметров по ссылке
function increment(&$a) // $a -ссылочная
{
  echo "Текущее значение: $a<br />";
  $a++;
  echo "После увеличения: $a<br />";
}
# ...
$num = 10;
echo "Начальное значение: $num<br />";
increment($num); // передача по ссылке
echo "После вызова функции: $num<br />"; // 11!
?>
</body>
</html>