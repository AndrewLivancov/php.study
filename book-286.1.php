<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$tools = ["One", "Two", "Three", "Four"];
usort($tools, function($a, $b) { return strcmp($a, $b); });
print_r($tools);
  ?>
</body>
</html>