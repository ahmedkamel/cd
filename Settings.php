
<?php
    
    session_start();
    
    if(isset($_SESSION['user_id']) == false)
    {
	$_SESSION['error_tip'] = 'You cannot access this page, you are not logged in!';
	header("Location: FrontPage.php");
    }
    else
    {
	$error_tip = "";
	$error_message = "";
	$header = "";
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];

	$title = "Settings";
	$content_title = "Settings";
	$content = 
	'
	    <div align="center" style="width:60%; padding-left:20%; padding-right:20%;">
		<form action="Controllers/UserController.php?functionName=UpdateProfile" method="post">

		    <input value="'.$_SESSION['user_firstname'].'" placeholder="First Name" class="textbox empty" type="text" name="firstname" id="firstname" oninput="checkNameValidity(\'firstname\', \'First Name\')" style="width:42%;" required/>
		    <input value="'.$_SESSION['user_lastname'].'" placeholder="Last Name" class="textbox empty" type="text" name="lastname" id="lastname" oninput="checkNameValidity(\'lastname\', \'Last Name\')" style="width:42%;" required/></br>
		    <input value="'.$_SESSION['user_email'].'" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')" required /></br>
		    <input value="" type="password" placeholder="Old Password" class="textbox empty" type="text" id="passwordold" name="passwordold" required/></br>
		    <input value="" type="password" placeholder="New Password" class="textbox empty" type="text" id="passwordnew" name="passwordnew" oninput="checkPasswordStrength(\'passwordnew\');" required/></br>
		    <input value="" type="password" placeholder="Confirm New Password" class="textbox empty" type="text" id="passwordnewconfirm" name="passwordnewconfirm"  oninput="checkMatch(\'passwordnewconfirm\',\'passwordnew\');" required />
		    <br/>
		    <label style="color:red; font-weight:bold; font-size:15px">'.$error_message.'</label>
		    <br/><br/>
		    <input value="Save" type="submit" name="button" class="button" id="button"/>
		</form>
	    </div>

	    <script src="js/Validation.js" type="text/javascript"></script>
	    <script> var LINK = "settingsLINK"; </script>
	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    }

include 'Template/MainTemplate.html';
?>