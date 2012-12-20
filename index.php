<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id='wrapper'>
    <div id='slotmachine'>
        <div id='play'>
            <?php
			$cPoints = $_SESSION['points'];
			
                srand();
                $num1 = rand(0, 4);
                $num2 = rand(0, 4);
                $num3 = rand(0, 4);
                                
                if($num1 == $num2 && $num3 == 4)
				{
					$num3 = rand(0,4);
				}

				include('switch.php');	
				include('switchpoint.php');	


				if($num2 == $num3 && $num1 == $num3)
				{
					include('switchpoint.php');
					print "<br/>";
					print "<div id='win'><h1>YOU'RE WINNER
					<br>
					YOU WIN ".$pointWin." CREDITS!</h1></div>";
					$cPoints = $cPoints + $pointWin;
					$_SESSION['points'] = $cPoints;
				}
				print $cPoints;
            ?>
        </div> 
        <?php if (isset($pointWin)){print $pointWin;} ?>  
    </div>
    
    <div id="reset">
    <input type="submit" name="clear" id="clear" value="Clear Session" />
    <?php
	
	if(isset($_POST['clear']))
	{
		unset($_SESSION['points']);
	}
	
	?>
    </div>
    
</div>

</body>
</html>