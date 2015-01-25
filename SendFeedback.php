
<?php
    
    

	$error_tip = "";
	$error_message = "";
	$header = "";
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];

	$title = "Settings";
	$content_title = "";
	$content = 
	'

	    <div align="left" style="width:60%; padding-right:10%;">
		<form action="Controllers/UserController.php?functionName=SendFeedback" method="post">
			<h3 >Your message will be reviewed as soon as possible!</h3>
			<div class="radioGroup">
			<input type="radio" name="mt" value="reoprt"/> Bug Report
			<input type="radio" name="mt" value="feedback"/> Feedback
			<input type="radio" name="mt" value="other"/> Other
			</div>
			<input type="text" name="nameTXT" id="name" placeholder="Name" class="textbox">
			<input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')"  required />
			<textarea type="textarea" name="messageareaTXT" class="textarea" style="width:100%; height:400px"></textarea></br>
			<input value="Send" type="submit" name="button" class="button" id="button"/>
		    
		</form>
	    </div>
	    <script src="js/Validation.js" type="text/javascript"></script>

	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    

include 'Template/MainTemplate.html';
?>