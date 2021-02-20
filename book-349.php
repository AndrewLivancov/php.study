<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$perms = fileperms("text.txt");
echo decoct($perms);
echo decbin($perms);
  ?>
</body>
</html>