<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  ## Вывод всех переменных окружения print  all variable  environment 
foreach ($_SERVER as $k => $v) {
	echo "<b>$k</b> => <tt>$v</tt><br />\n";
}

?>
</body>
</html>