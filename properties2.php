<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class pi {
	public static $value=3.14159;
	public function staticValue() {
		return self::$value;
	}
}

// get static property 
$pi = new pi();
echo $pi->staticValue();
?>
</body>
</html>