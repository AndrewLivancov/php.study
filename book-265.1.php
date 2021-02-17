<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function transliterate($st) {
	$st = strtr($st, 
		"абвгдежзийклмнопрстуфыэАБВГДЕЖЗИЙКЛМНОПРСТУФЫЭ",
		"abvgdegziyklmnoprstUfyeABVGDEGZIYKLMNOPRSTUFYE"

	);

$st = strtr($st, array(
'е'=>"yo", 'х'=>"h", 'ц'=>"ts", 'ч'=>"ch", 'ш'=>"sh",
'щ'=>"shch", 'ъ'=>'', 'ь'=>'', 'ю'=>"yu", 'я'=>"ya",
'Е'=>"Yo", 'Х'=>"H", 'Ц'=>"Ts", 'Ч'=>"Ch", 'Ш'=>"Sh",
'Щ'=>"Shch", 'Ъ'=>'', 'Ь'=>'', 'Ю'=>"Yu", 'Я'=>"Ya",
));
return $st;
}
echo transliterate("У попа была собака, он ее любил.");
  ?>
</body>
</html>