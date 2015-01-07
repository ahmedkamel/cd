<?php

    require 'Controllers/RegistrationController.php';
    $registrationController = new RegistrationController();
    
    $title = "Registration";
    
    $content = "
<form action='' method='post' class='registrationForm'>
    
    <fieldset method='post' class='registrationTable'>
    
	<label for='country'>Register As: </label>
	<select class='selectRoleField' name='roleSLCT'>"
	    .$registrationController->AddRoleValues()."
	</select><br/>

	<label for='firstname'>First Name: </label>
	<input type='text' class='inputField' name='firstnameTXT'/>
	<br/>

	<label for='middlename'>Middle Name: </label>
	<input type='text' class='inputField' name='middlenameTXT'/><br/>

	<label for='lastname'>Last Name: </label>
	<input type='text' class='inputField' name='lastnameTXT'/><br/>

	<label for='email'>Email: </label>
	<input type='text' class='inputField' name='emailTXT'/><br/>

	<label for='username'>Username: </label>
	<input type='text' class='inputField' name='usernameTXT'/><br/>

	<label for='password'>Password: </label>
	<input type='password' class='inputField' name='passwordTXT'/><br/>

	<label for='repassword'>Re-enter Password: </label>
	<input type='password' class='inputField' name='repasswordTXT'/><br/>

	<label for='birthday'>Birthday: </label>
	<select class='selectDayField' name='birthdaySLCT'>
	    <option value=''>Day</option>".$registrationController->AddDayValues()."
	</select>
	<select class='selectMonthField' name='birthmonthSLCT'>
	    <option value=''>Month</option>".$registrationController->AddMonthValues()."
	</select>
	<select class='selectYearField' name='birthyearSLCT'>
	    <option value=''>Year</option>".$registrationController->AddYearValues()."
	</select>
	<br/>

	<label for='gender'>Gender: </label>
	<input type='radio' name='genderRB' value='0' class='gender'>Male &nbsp;&nbsp;
	<input type='radio' name='genderRB' value='1' class='gender'>Female
	<br/>

	<label for='country'>Country: </label>
	<select class='selectCountryField' name='countrySLCT'>
	    <option value=''></option>".$registrationController->AddCountryValues()."
	</select><br/>

	<label for='city'>City: </label>
	<input type='text' class='inputField' name='cityTXT'/><br/>
    </fieldset>
    <fieldset class='registrationTable'>
	<legend>CONTACT INFORMATION</legend>
	<label for='address_line_1'>Address 1: </label>
	<input type='text' class='inputField' name='address_1TXT'/><br/>

	<label for='address_line_2'>Address 2: </label>
	<input type='text' class='inputField' name='address_2TXT'/><br/>

	<label for='zip'>Zip Code: </label>
	<input type='text' class='inputField' name='zipTXT'/><br/>

	<label for='mobile'>Mobile Number: </label>
	<input type='text' class='inputField' name='mobileTXT'/><br/>

	<label for='homephone'>Home Phone Number: </label>
	<input type='text' class='inputField' name='homephoneTXT'/><br/>

	<label for='fax'>Fax Number: </label>
	<input type='text' class='inputField' name='faxTXT'/><br/>
    </fieldset>
    <fieldset class='registrationTable'>
	<legend>SECURITY QUESTIONS</legend>

	<p>In case you forgot your password, we'll ask you these questions to restore your password. So, choose them wisely.</p>

	<label for='security_question_1'>Security Question 1: </label>
	<select class='selectSecurityQuestionField' name='security_question_1SLCT'>
	    <option value='Select Question'></option>".$registrationController->AddSecurityQuestionValues()."
	</select><br/>
	<label for='security_answer_1'>Answer: </label>
	<input type='text' class='inputField' name='security_answer_1TXT'/><br/>

	<label for='security_question_2'>Security Question 2: </label>
	<select class='selectSecurityQuestionField' name='security_question_2SLCT'>
	    <option value='Select Question'></option>".$registrationController->AddSecurityQuestionValues()."
	</select><br/>
	<label for='security_answer_2'>Answer: </label>
	<input type='text' class='inputField' name='security_answer_2TXT'/><br/>

	<label for='security_question_3'>Security Question 3: </label>
	<select class='selectSecurityQuestionField' name='security_question_3SLCT'>
	    <option value='Select Question'></option>".$registrationController->AddSecurityQuestionValues()."
	</select><br/>
	<label for='security_answer_3'>Answer: </label>
	<input type='text' class='inputField' name='security_answer_3TXT'/><br/>

    </fieldset>
    <fieldset class='registrationTable'>
	<legend>CREDENTIALS</legend>
	<input type='checkbox' name='agree_send_mail' value='1'>Agree to receive emails.<br/>
	<input type='checkbox' name='agree_call' value='1'>Agree to receive calls.<br/>
	<input type='checkbox' name='agree_fax' value='1'>Agree to receive faxes.<br/>
    </fieldset>

    <br/>
    <div class='signUpButton'>
    <input type='submit' value='Sign Up' style='width: 100px; height: 50px;'>
    </div>

</form>
	    ";
    
    // CHECK CODE:
    
    $OK = 1;
    //$check = new Check();
    
    /*if ( ! empty($_POST["firstnameTXT"]))
    $check->firstname($_POST["firstnameTXT"]);
    else
    {
	$OK = 0;
	//firstnameERROR = "This field is required.";
    }
    */
    if(isset($_POST["roleSLCT"]) && isset($_POST["firstnameTXT"]) && isset($_POST["middlenameTXT"]) && isset($_POST["lastnameTXT"]) && isset($_POST["emailTXT"]) && isset($_POST["usernameTXT"]) && isset($_POST["passwordTXT"]) && isset($_POST["birthyearSLCT"]) && isset($_POST["birthmonthSLCT"]) && isset($_POST["birthdaySLCT"]) && isset($_POST["countrySLCT"]) && isset($_POST["cityTXT"]) && isset($_POST["address_1TXT"]) && isset($_POST["address_2TXT"]) && isset($_POST["zipTXT"]) && isset($_POST["mobileTXT"]) && isset($_POST["homephoneTXT"]) && isset($_POST["faxTXT"]) && isset($_POST["security_question_1SLCT"]) && isset($_POST["security_answer_1TXT"]) && isset($_POST["security_question_2SLCT"]) && isset($_POST["security_answer_2TXT"]) && isset($_POST["security_question_3SLCT"]) && isset($_POST["security_answer_3TXT"]))
    {
	if($OK)
	{
	    $registrationController -> InsertUser();
	}
    }
    /*class Check
    {
	function email($email)
	{
	    
	}
    }*/
    include 'Template/OldTemplate.php';
?>

