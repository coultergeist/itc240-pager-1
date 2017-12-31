<?php
//postback2.php
/*REMEMBER: 
        * if you're getting errors, check to see if the "?php...." is in the url
            delete that/enter/and try again
        * the form action="" name must be the same name as your file name
*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

/*

template: ' . XXX . '

*/

if(isset($_POST['FirstName'])) //the index name must match the name attritube below
{
    // *** show feedback after submisison ***
    echo $_POST['FirstName'];
}
else
{
    // *** show form ***
    echo '
    <form action="' . THIS_PAGE . '" method="post" >
        <p>First Name: <input type="text" name="FirstName"></p>
        <p><input type="submit"></p>
    </form>
    ';
}

