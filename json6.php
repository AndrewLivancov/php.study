<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
	?>
</body>
</html>