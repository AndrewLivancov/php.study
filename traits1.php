<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
trait message1 {
	public function msg1() {
		echo "OOP is fun!";
	}
}

class Welcome {
	use message1;
}

$obj =  new Welcome();
$obj->msg1();
?>
</body>
</html>