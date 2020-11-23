<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Статические переменные
function selfcount()
{
	static $count = 0;
	$count++;
	echo $count, "<br />";
}
for ($i = 0; $i < 5; $i++) selfcount();
  ?>
</body>
</html>