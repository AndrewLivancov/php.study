<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$file = "file.txt";
fclose(fopen($file, "a+b"));
$f = fopen($file, "r+b") or die("Can't open file!");
while (true) {
	flock($f, LOCK_EX);
	fflush($f);
	flock($f, LOCK_UN);
	sleep(10);
}
fclose($f);
  ?>
</body>
</html>