<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a = 100;
function r() {
	global $a;
	return $a;
}
$b = r();
$b = 0;
echo $a;
  ?>
</body>
</html>