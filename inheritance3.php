<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class Fruit {
	public $name;
	public $color;
	public function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	protected function intro() {
		echo "The fruit is {$this->name} and the color is {$this->color}.";
	}
}

class Strawberry extends Fruit {
	public function message() {
		echo "Am I a fruit or a berry? ";
	// Call protected function from within derived class - OK
		$this -> intro();
	}
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
?>
</body>
</html>