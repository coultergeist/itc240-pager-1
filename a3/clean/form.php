<?php include 'includes/header.php'?>
                <h3>Welcome</h3>
                

<?php
    
    
define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));

if(isset($_POST['Name'])) //the index name must match the name attritube below
{
    // *** show feedback after submisison ***
    
    /*
    echo '<pre>';
        var_dump($_POST);
    echo '</pre>';
    die;
    */
    
    $message = process_post();
    $email = $_POST['Email'];
    //echo $myText;
    
    $to      = 'dcmarie3@gmail.com';
    $subject = 'Test Email';
    //$message = 'hello';
    $headers = 'From: noreply@velvetriot.com' . PHP_EOL .
    'Reply-To: ' . $email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    
    echo '<p>Thank you. We will be in touch within 24 hours. We promise.</p>';
}
else
{
    // *** show form ***
    echo '
    <form action="' . THIS_PAGE . '" method="post" >
  
	<fieldset>
	<legend>Contact Information</legend>
	
		<br><label>Name</label><br>
        <input type="name" name="Name" required placeholder="Name">
		
		<br><label>Email</label><br>
        <input type="email" name="Email" required placeholder="Email">		
		<br><label>Phone</label><br>
        
		<input type="text" name="phone" placeholder="Optional">
	
	</fieldset>	<!--Close Personal Info box    -->
		
		
	<fieldset>
	<legend>What would you like to know more about?</legend>

		<p><input type="checkbox" name="moreinfo[]" value="schedule-an-appointment"> Schedule An Appointment </p>
		<p><input type="checkbox" name="moreinfo[]" value="transfer-from-another-docter"> Transfer From Another Doctor </p>
		<p><input type="checkbox" name="moreinfo[]" value="questions-about-my-health-insurance"> Questions About My Health Insurance </p>
		<p><input type="checkbox" name="moreinfo[]" value="request-a-follow-up"> Request A Follow-up </p>
		<p class="last"><input type="checkbox" name="moreinfo[]" value="Something-else"> Something else </p>	
	</fieldset> <!-- Close About Section-->

	
	<fieldset>
	<legend>How did you hear about us?</legend>
	
		<select name="how">
		<option>Choose One</option>
		<option value="word-of-mouth">Word of mouth</option>
		<option value="referral">Referral</option>
		<option value="google">Google</option>
		<option value="neighborhood-welcome-packet">Neighborhood Welcome Packet</option>
		</select>
	
	</fieldset> <!-- Close How Box -->
	
	
	<fieldset>
	<legend>Give us a few words that more describes your concern.</legend>
		<textarea name="comments" rows="8"></textarea>
		
        <div class="g-recaptcha" data-sitekey="6Le4VRUUAAAAADlCQwhuyIKRyh9GgmuptfJRxXPB"></div>
        
        
	</fieldset>	
	
<input type="submit" value="Submit">

</form>
    ';
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}

 
?>

<?php include 'includes/footer.php'?>            