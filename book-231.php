<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$message = "Work cannot be done without errors:<br />";
$check = function(array $errors) use ($message)
{
	if (isset($errors) && count($errors) > 0) {
		echo $message;
		foreach($errors as $error) {
			echo "$error<br />";
		}
	}
};
$check([]);
// ... 
$errors[] = "Fill the user name";
$check($errors);
// ...
$message = "List of the requests"; 
$errors = ["PHP", "MySQL", "memcache"];
$check($errors);
  ?>
</body>
</html>