<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$i = 0; $j = 0; $k = "Points";
while ($i < 100) {
	$k .= ".";
	$j++;
	$i += $j;
}
echo $k;
?>
</body>
</html>