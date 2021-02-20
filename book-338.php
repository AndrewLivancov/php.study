<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function printTree($level = 1) {
	$d = @opendir(".");
	if (!$d) return;
	while (($e = readdir($d)) !== false) {
		if ($e == '.' || $e == '..') continue;
		if (!@is_dir($e)) continue;
		for ($i = 0; $i < $level; $i++) echo " ";
		echo "$e\n";
	if (!chdir($e)) continue;
	printTree($level + 1);
	chdir("..");
	flush();
	}
	closedir($d);
}
echo "<pre>";
echo "/\n";
chdir($_SERVER['DOCUMENT_ROOT']);
printTree();
echo "</pre>";
  ?>
</body>
</html>