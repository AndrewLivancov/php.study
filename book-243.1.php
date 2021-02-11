<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function crange($size)
{
	$arr = [];
	for($i = 0; $i < $size; $i++) {
		$arr[] = $i;
	}
	return $arr;
}

$range = crange(1024000);
foreach($range as $i) echo "$i ";
echo memory_get_usage()."<br />";
  ?>
</body>
</html>