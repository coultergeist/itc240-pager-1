<?php
//postback.php
//REMEMBER: if you're getting errors, check to see if the "?php...." is in the url
//  delete that/enter/and try again

if(isset($_POST['FirstName'])) //the index name must match the name attritube below
{//show feedback
    echo $_POST['FirstName'];
}else{//show form
    echo '
    <form method="post" action="postback.php">
    First Name: <input type="text" name="FirstName" /><br />
    <input type="submit" /> 
    </form>
    ';
}//usually will use method="post" for forms, not GET

