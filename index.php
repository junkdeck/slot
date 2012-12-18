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
                    print "<div id='win'><h1>A WINRAR IS YOU</h1></div>";
                }
                
            ?>
            <div id='win'>
            fart
            </div>
        </div>   
    </div> 
</div>

</body>
</html>