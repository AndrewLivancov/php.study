<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$json = '{"employee": "Иван Иванов","phones":["916 153 2854", "916 643 8420"]}';
$arr = json_decode($json, true);
echo "<pre>"; print_r($arr); echo "</pre>";
  ?>
</body>
</html>