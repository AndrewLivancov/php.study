<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class Goodbye {
	const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
	public function byebye() {
		echo self::LEAVING_MESSAGE;
	}
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>
</body>
</html>