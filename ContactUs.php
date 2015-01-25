
<?php
    
    

	$error_tip = "";
	$error_message = "";
	$header = "";
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];

	$title = "Contact us";
	$content_title = "";
	$content = 
	'

	    <div align="left" style="width:60%; padding-right:10%;">
		<form action="Controllers/UserController.php?functionName=SendFeedback" method="post">
			<h3 >Your message will be reviewed as soon as possible!</h3>
			
			<div style="margin-left:6px;">
			    <div style="margin-top: 10px;"  class="radioGroup">
				<input type="radio" name="gender" value="1" id="bugreport" required/>
				<label for="bugreport" style="padding-left:5px;" class="radio">Bug Report</label>
			    </div>
			    <div style="margin-top: 10px;" class="radioGroup">
				<input type="radio" name="gender" value="2" id="feedback" required />
				<label for="feedback" style="padding-left:5px;" class="radio">Feedback</label>
			    </div>
			    <div style="margin-top: 10px;" class="radioGroup">
				<input type="radio" name="gender" value="3" id="other" required />
				<label for="other" style="padding-left:5px;" class="radio">Other</label>
			    </div>
			</div>

			<input value="" placeholder="Name" class="textbox empty" type="text" name="firstname" id="firstname" oninput="checkNameValidity(\'firstname\', \'First Name\')" style="width:42%;" required />
			<input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" oninput="checkEmailValidity(\'email\')"  required />
			
			<div id="subject_div">
			</div>
			
			<textarea type="textarea" name="messageareaTXT" class="textarea" style="width:100%; height:400px"></textarea></br>
			<input value="Send" type="submit" name="button" class="button" id="button"/>
		    
		</form>
	    </div>
	    <script src="js/Validation.js" type="text/javascript"></script>
	    <script type="text/javascript">
	    	function radioChange(){
		    	var otherText = "<input value="" placeholder="Subject" class="textbox empty" type="text" name="subject" id="subject" style="width:42%;" required />";
		    	if (document.getElementById("other_check").checked) document.getElementById("subject_div").innerHTML = otherText;
		    	else document.getElementById("subject_div").innerHTML = "";
		    }
	    </script>

	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    

include 'Template/MainTemplate.html';
?>