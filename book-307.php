<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
mt_srand(123);
for ($i = 0; $i < 5; $i++) echo mt_rand()." ";
	echo "<br />";
mt_srand(123);
for ($i = 0; $i < 5; $i++) echo mt_rand()." ";
  ?>
</body>
</html>