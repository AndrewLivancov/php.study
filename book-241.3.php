<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$arr = [1,2,3,4,5,6];
$select = select($arr, function($e) { return $e % 2 == 0 ? true : false; });
$collect = collect($select, function($e){ return $e * $e; });
foreach($collect as $val) echo "$val ";
 ?>
</body>
</html>