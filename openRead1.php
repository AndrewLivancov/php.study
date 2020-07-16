<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
 ?>

</body>
</html>