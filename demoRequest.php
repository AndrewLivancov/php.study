<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Name: <input type="text" name="fname">
	<input type="submit">
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	# Collect value of input field
	$name = htmlspecialchars($_REQUEST['fname']);
	if (empty($name)) {
		echo "Name is empty....";
	} else {
		echo $name;
	}
}

?>
</body>
</html>