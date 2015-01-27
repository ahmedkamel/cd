
<?php
    
    
	session_start();
	$error_tip = "";
	$error_message = "";
	
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];

	$email_content = "";
	if (isset($_SESSION["user_email"])){
		$email_content = $_SESSION['user_email'];
	}
	$title = "Contact us";
	$content_title = "";

	$content = 
	'

	    <div align="left" style="width:60%; padding-right:10%;">
		<form action="Controllers/GeneralController.php?functionName=InsertMessage" method="post">
			<h3 >Your message will be reviewed as soon as possible!</h3>
			
			<div style="margin-left:6px;">
			    <div style="margin-top: 10px;"  class="radioGroup">
				<input type="radio" name="messagetype" value="1" id="bugreport" onchange="checkContactEnable(); radioChange();" required/>
				<label for="bugreport" style="padding-left:5px;" class="radio">Bug Report</label>
			    </div>
			    <div style="margin-top: 10px;" class="radioGroup">
				<input type="radio" name="messagetype" value="2" id="feedback" onchange="checkContactEnable(); radioChange();" required />
				<label for="feedback" style="padding-left:5px;" class="radio">Feedback</label>
			    </div>
			    <div style="margin-top: 10px;" class="radioGroup">
				<input type="radio" name="messagetype" value="3" id="other" onchange="radioChange(); checkContactEnable()" required />
				<label for="other" style="padding-left:5px;" class="radio">Other</label>
			    </div>
			</div>

			<input value="" placeholder="Name" class="textbox empty" type="text" name="name" id="name" oninput="checkContactEnable()" style="width:42%;" required />
			
			<input value="'.$email_content.'" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkContactEnable(); checkEmailValidity(\'email\')"  required />
		
			<div id="subject_div">
			</div>
			
			<textarea type="textarea" name="message" class="textarea" style="width:100%; height:400px; float:left" id="message" oninput="checkContactEnable()" required></textarea>
			<input value="Send" type="submit" name="button" class="button" id="submit" disabled/>
		    
		</form>
	    </div>
	    <script src="js/Validation.js" type="text/javascript"></script>
	    <script>var LINK = "contactusLINK";</script>

	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    

include 'Template/MainTemplate.php';
?>