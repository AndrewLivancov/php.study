<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// Echo session variables that were on previous page
echo "Favourite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favourite animal is " .$_SESSION["favanimal"] . ".";
?>
</body>
</html>