<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
function simple($from = 0, $to = 100)
{
	for($i = $from; $i < $to; $i++) {
		echo "value =  $i<br />";
		yield $i;
	}
}
foreach(simple() as $val) {
	echo "square = ".($val * $val)."<br />";
}
 ?>
</body>
</html>