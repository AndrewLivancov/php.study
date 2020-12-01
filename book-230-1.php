<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$myecho = function (... $str)

{
	foreach ($str as $v) {
		echo "$v<br />\n"; 
	}
};
$myecho("Mercury", "Venera", "Earth", "Mars");
  ?>
</body>
</html>