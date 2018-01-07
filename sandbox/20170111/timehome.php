<?php
//time.php

date_default_timezone_set('America/Los_Angeles');

$time = date('H');

if($time==22) 
{
    $color = "Blue";
    $comment = "It's Evening";
    
}else{
    $color = "Yellow";
    $comment = "It's not 10";
}



?>

<html>

<body>

<h1>The Time is: <?=$time?></h1>
<p>This hour's color is: <?=$color?></p>
<p>Interesting comment goes here: <?=$comment?></p>
</body>
</html>