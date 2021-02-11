<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function generator()
{
	echo "before first yield<br />";
yield 1;
	echo "before second yield<br />";
yield 2;
	echo "before third yield<br />";
yield 3;
	echo "after third yield<br />";
}
foreach(generator() as $i) {
	echo "$i<br />";
}
  ?>
</body>
</html>