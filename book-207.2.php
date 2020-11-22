<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$phone = ['001', '949', '555', '0112'];
$save = serialize($phone);
echo $save;
$phone = "bogus";
echo count($phone), "<br>";
$phone = unserialize($save);
echo count($phone);
?>
</body>
</html>