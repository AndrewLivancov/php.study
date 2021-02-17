<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$arr1 = [3,4,2,7,1,5,];
$arr2 = ["world", "Hello", "yes", "no", "apple", "wet"];
array_multisort($arr1, SORT_DESC, SORT_NUMERIC, $arr2);
print_r($arr1);
print_r($arr2);
  ?>
</body>
</html>