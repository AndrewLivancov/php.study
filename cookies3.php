<!DOCTYPE html>
<?php 
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>