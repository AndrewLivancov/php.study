<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$url = "https://www.w3schools.com";
// Remove all illegal characters from a url 
$url = filter_var($url, FILTER_SANITIZE_URL);
// Valifte url
if (!filter_var($url, FILTER_SANITIZE_URL) === false) {
	echo("$url is a valid URL");
} else {
	echo("$url is not a valid URL");
}
?>
</body>
</html>