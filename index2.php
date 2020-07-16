<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Навязчивые предупреждения -->
<form action="warn.php">
	<input type="submit" name="doGo" value="Click">
</form>
<?php 
// В массиве $_REQUEST всегда содержатся пришедшие из формы данные.
if (@$_REQUEST['doGo']) echo "Вы нажали кнопку!";
@list ($key, $value) = explode("=", $string);
$f = @fopen("passwords.txt") or die ("не удалось открыть файл!");

?>
</body>
</html>