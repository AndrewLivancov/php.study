<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (PHP_OS == "WINNT") {
	// Функция-заглушка
	function myChown($fname, $attr) {
		// Ничего не делает
		return 1;
	}
} else {
	// Передаем вызов настоящей chown()
	function myChown($fname, $attr) {
		return chown($fname, $attr);
	}
}

  ?>
</body>
</html>