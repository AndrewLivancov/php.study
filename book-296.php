<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$native = ["green", "red", "blue"];
$colors = ["red" ,"yellow", "green", "cyan"];
$inter = array_unique(array_merge($colors, $native));
print_r($inter);
  ?>
</body>
</html>