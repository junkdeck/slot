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

switch($num1)
{
	case "0":
	print "<img src='sausage.png' />";
	break;
	
	case "1":
	print "<img src='dead.png' />";
	break;
	
	case "2":
	print "<img src='eye.png' />";
	break;
	
	case "3":
	print "<img src='splat.png' />";
	break;
	
	case "4":
	print "<img src='7.png' />";
	break;
}
switch($num2)
{
	case "0":
	print "<img src='sausage.png' />";
	break;
	
	case "1":
	print "<img src='dead.png' />";
	break;
	
	case "2":
	print "<img src='eye.png' />";
	break;
	
	case "3":
	print "<img src='splat.png' />";
	break;
	
	case "4":
	print "<img src='7.png' />";
	break;
}
switch($num3)
{
	case "0":
	print "<img src='sausage.png' />";
	break;
	
	case "1":
	print "<img src='dead.png' />";
	break;
	
	case "2":
	print "<img src='eye.png' />";
	break;
	
	case "3":
	print "<img src='splat.png' />";
	break;
	
	case "4":
	print "<img src='7.png' />";
	break;
} //switch for checking which number shows what image

if($num1 == $num2 && $num2 == $num3)
{
	print "<br/>";
	print "<h1>A WINRAR IS YOU</h1>";
}

?>

</body>
</html>