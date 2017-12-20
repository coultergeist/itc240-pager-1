<?php
//session-test1.php

session_start();

if(isset($_SESSION['FavoriteColor']))
{//if it does exist, show session data
    echo $_SESSION['FavoriteColor'];
}else{//otherwise, tell use no data available
    echo 'Sorry, no favorite color selected';
}

//$_SESSION['FavoriteColor'] = 'blue';

