<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function collect($arr, $callback)
{
	foreach($arr as $value) {
		yield $callback($value);
	}
}

$arr = [1, 2, 3, 4, 5, 6];
$collect = collect($arr, function($e) {return $e * $e; });
foreach($collect as $val) echo "$val ";
  ?>
</body>
</html>