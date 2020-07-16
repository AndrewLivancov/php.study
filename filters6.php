<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$email = "john.doe@example.com";
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// validate email
if (!filter_var($email, FILTER_SANITIZE_EMAIL) === false) {
	echo("$email is a valid address");
} else {
	echo("$email is not a valid email address");
}
?>
</body>
</html>