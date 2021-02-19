<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$ourFile = fopen("largetextfile.txt", "r");
for ($i = 0; $s = fgets($ourFile, 10000); $i++) {
	if (mt_rand(0, $i) == 0) $line = $s;
}
echo $line;
  ?>
</body>
</html>