<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$d = opendir(".");
while (false !== ($e = readdir($d))) {
	if (is_dir($e)) $files[$e] = 0;
	else $files[$e] = filesize($e);
}

uksort($files, function($f1, $f2)
{
	if (is_dir($f1) && !is_dir($f2)) return -1;
	if (!is_dir($f1) && is_dir($f2)) return 1;
	return $f1 <=> $f2;
});
print_r($files);
  ?>
</body>
</html>