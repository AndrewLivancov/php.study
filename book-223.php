<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function factor($n)
{
	if ($n <= 0) return 1;
	else return $n * factor($n - 1);
}
echo factor(20);
  ?>
</body>
</html>