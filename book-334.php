<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$file = "file.txt";
fclose(fopen($file, "a+b"));
$f = fopen($file, "r+b") or die("Can't open the file!");
flock($f, LOCK_SH);
fclose($f);
  ?>
</body>
</html>