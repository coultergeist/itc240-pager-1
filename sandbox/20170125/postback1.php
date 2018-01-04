<? php
//postback1.php

    
//the if block is the form itself
if(isset($_POST['FirstName'])) //single or double quotes are OK in arrays
{//show feedback
    echo $_POST['FirstName'];
}else{//show form
    //the echo statement followed by two single quotes let  us add infinite html between them
    echo ' 
    <form method="post" action="postback1.php">
    First Name: <input type="text" name="FirstName" /><br />
    <input type="submit" />
    </form>
   '; 
}
