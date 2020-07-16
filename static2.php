<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class greeting {
	public static function welcome() {
		echo "Hello World!";
	}
	public function __construct() {
		self::welcome();
	}
}

new greeting();
?>
</body>
</html>