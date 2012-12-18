<?php
if(isset($_POST['submit']))
{
	fart();
}

$i = 0;
$i;
function fart()
{
	global $i;
	print $i;
	$i++;
}
?>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<input type="submit" name="submit" value="Click Me">
</form>