<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function select($arr, $callback)
{
	foreach($arr as $value) {
		if($callback($value)) yield $value;
	}
}

$arr = [1,2,3,4,5,6];
$select = select($arr, function($e){ return $e % 2 == 0 ? true : false; });
foreach($select as $val) echo "$val ";
  ?>
</body>
</html>