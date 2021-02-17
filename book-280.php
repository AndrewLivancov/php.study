<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## sorting massives by values 
$A = [
"a" => "Zero",
"b" => "Weapon",
"c" => "Alpha",
"d" => "Processor"
];
asort($A);
print_r($A);
// Array ([c]=>Alpha [d]=>Processor [b]=>Weapon [a]=>Zero)
  ?>
</body>
</html>