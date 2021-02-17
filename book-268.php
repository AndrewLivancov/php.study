<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$example = <<<EXAMPLE
<?php
echo "Hello, world!";
?>
EXAMPLE;
	echo htmlspecialchars($example);
  ?>
</body>
</html>