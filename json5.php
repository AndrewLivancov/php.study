<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>
</body>
</html>