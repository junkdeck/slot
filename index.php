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
                srand();
                $num1 = rand(0, 4);
                $num2 = rand(0, 4);
                $num3 = rand(0, 4);
                
                include('switch.php');	
                
                if($num1 == $num2 && $num2 == $num3)
                {
                    print "<br/>";
                    print "<div id='win'><h1>A WINRAR IS YOU
					<br>
					YOU WIN ".$pointWin." CREDITS!</h1></div>";
                }
                
            ?>
        </div> 
        <?php if (isset($pointWin)){print $pointWin;} ?>  
    </div> 
</div>

</body>
</html>