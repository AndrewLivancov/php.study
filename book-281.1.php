<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Sorting massives by clues
$A = [
"c" => "Alpha",
"a" => "Zero",
"d" => "Processor",
"b" => "Weapon",
];
ksort($A);
print_r($A);
// Array([a]=>Zero [b]=>Weapon [c]=>Alpha [d]=>Processor)
  ?>
</body>
</html>