<?php
//arrays1.php

$myArray = array('cherry', 'orange', 'pineapple');

/*
echo '<pre>';
var_dump($myArray);
echo '</pre>';
*/

for ($i=0;$i<count($myArray);$i++)
{
    echo '<p>' . $myArray[$i] . '</p>';
}