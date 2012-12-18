<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
srand();
$num1 = rand(0, 4);
$num2 = rand(0, 4);
$num3 = rand(0, 4);

$result = $num1.' | '.$num2.' | '.$num3;

print $result;

if($num1 == $num2 && $num2 == $num3)
{
	print "A WINRAR IS YOU";
}

?>
</body>
</html>