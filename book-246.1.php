<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function block()
{
	while(true) {
		$string = yield;
		echo $string;
	}
}
$block = block();
$block->send("Hello, world!<br />");
$block->send("Hello, PHP!<br />");
  ?>
</body>
</html>