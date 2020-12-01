<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function tabber($spaces, $echo, ...$planets)
{
	$new = [];
	foreach ($planets as $planet) {
		$new[] = str_repeat("&nbsp;", $spaces).$planet;
	}
	$echo(...$new);
}

$planets = ("Mercury", "Venus", "Earth", "Mars");
tabber{10, function(...$str) {
	foreach ($str as $v)
		echo "$v<br />\n";
	}
}, ...$planets);
  ?>
</body>
</html>