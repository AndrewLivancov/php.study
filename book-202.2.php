<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php ## Перебор ассоциативного массива
$birth = [
"Thomas Anderson" => "1962-03-11",
"Keanu Reeves" => "1962-09-02",
];
for (reset($birth); ($k = key($birth)); next($birth))
echo "$k родился ($birth[$k])<br />";
?>
</body>
</html>