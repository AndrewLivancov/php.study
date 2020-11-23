<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function deleter() { unset($GLOBALS['a']); }
$a = 100;
deleter();
echo $a; // Предупреждение: переменная $a не определена!
  ?>
</body>
</html>