<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
class domain {
	protected static function getWebsiteName() {
		return "W3Schools.com";
	}
}

class domainW3 extends domain {
	public $websiteName;
	public function __construct() {
$this -> websiteName = parent::getWebsiteName();
	}
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
</body>
</html>