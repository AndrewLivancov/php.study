<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Особенности инструкции global
$a = 100;
function test()
{
	global $a;
	unset($a);
}
test();
echo $a; // Выводит 100, т.е настоящая $a не была удалена в test()!
  ?>
</body>
</html>