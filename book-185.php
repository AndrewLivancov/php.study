<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
for ($i = 0; $i < count($files); $i++) {
	if ($files[$i] == ".") continue;
	if ($files[$i] == "..") continue;
	if (is_dir($files[$i])) continue;
	echo "Найденный файл: {$files [$i] }<br />";
}

?>
</body>
</html>