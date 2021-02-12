<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$str = "Hello world!";
echo "In string &quot;$str&quot; ".strlen($str)." bytes<br />";
echo "In string &quot;$str&quot; ".mb_strlen($str). " symbols<br />"
  ?>
</body>
</html>