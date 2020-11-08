<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
define (
	'DOSSIER',
	[
"Anderson" => ["name" => "Thomas", "born" => "1962-03-11"],
"Reeves" => ["name" => "keanu", "born" => "1962-09-02"],
]);
echo DOSSIER["Anderson"] ["name"]; // Thomas
?>
</body>
</html>