<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// Variable to check 
$url = "https://www.w3schools.com";
// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
	echo("$url is a valid URL with a query string");
} else {
	echo("$url is not a valid URL with a query string");
}

?>
</body>
</html>