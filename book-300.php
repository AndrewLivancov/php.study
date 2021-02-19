<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$arr = json_decode($_POST['json'], true);
$name = trim(implode(" ", $arr));
$result = "Здравствуйте";
if(!empty($name))
	$result .= ", $name";
$result .= "!";
echo htmlspecialchars($result);
  ?>
</body>
</html>