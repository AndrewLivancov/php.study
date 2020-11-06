<!DOCTYPE html>
<html>
<head>
	<title>Усовершенствованный скрипт блокировки сервера</title>
</head>
<body>
<?php 
if (!isset($_REQUEST['doGo'])) {?>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
	Логин: <input type="text" name="login" value=""><br />
	Пароль: <input type="password" name="password" value=""><br />
	<input type="submit" name="doGo" value="Нажмите кнопку!">
</form>
<?php } else {
	if ($_REQUEST['login'] == "root" && $_REQUEST['password'] == "ZlONOlOl") {
		echo "Доступ открыт для пользователя {$_REQUEST['login']}";
	// Команда блокирования рабочей станции (работает в NT-системах)
	system(""rundll32.exe user32.dll,LockWorkStation");
	} else {
		echo "Доступ закрыт!";
	}
 } ?>

?>
</body>
</html>