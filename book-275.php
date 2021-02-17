<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$st =<<<HTML
<b>Bold text</b>
<tt>Моноширинный текст</tt>
<a href='http://www.dklab.ru'>ССылка</a> 
a<x && y>d
HTML;
echo "Default text: $st";
echo "<hr>After delete text: ".strip_tags($st, "<tt><b>");
  ?>
</body>
</html>