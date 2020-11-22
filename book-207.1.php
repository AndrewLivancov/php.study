<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$A = ["a" => "aa", "b" => "bb", "c" => ["x" => "xx"]];
$st = serialize($A);
echo $st;
 ?>
</body>
</html>