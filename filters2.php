<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
</body>
</html>