<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function transliterate($st)
{
	$pattern = [ 'а', 'б', 'в', 'г', 'д', 'e', 'e',
	'ж', 'з', 'и', 'й', 'к', 'л', 'м',
	'н', 'о', 'п', 'р', 'с', 'т', 'у',
	'ф','х','ч','ц','ш','щ','ъ',
	'ы','ь','э','ю','я'];
	$replace = ['a', 'b', 'v', 'g', 'd', 'e', 'yo',
	 'zh', 'z', 'i', 'y', 'k', 'l', 'm',
	 'n', 'o', 'p', 'r', 's', 't', 'u',
	 'f', 'h', 'ch', 'ts', 'sh', 'shch', '\'',
	 'y', '', 'e', 'yu', 'ya'];
 return str_replace($pattern, $replace, $st);
}
echo transliterate("у попа была собака, он ее любил.");
  ?>
</body>
</html>