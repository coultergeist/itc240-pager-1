<?php
//postback3.php
/*REMEMBER: 
        * if you're getting errors, check to see if the "?php...." is in the url
            delete that/enter/and try again
        * the form action="" name must be the same name as your file name
*/


define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));

if(isset($_POST['Name'])) //the index name must match the name attritube below
{
    // *** show feedback after submisison ***
    echo '<pre>';
        var_dump($_POST);
    echo '</pre>';
}
else
{
    // *** show form ***
    echo '
    <form action="' . THIS_PAGE . '" method="post" >
        <p>Name: <input type="text" autofocus name="Name" required="required"></p>
        <p>Email: <input type="email" name="Email" required="required"></p>
        <p>Comments: <textarea name="Comments"></textarea required="required"></p>
        <p><input type="submit" value="Contact Us"></p>
    </form>
    ';
}

