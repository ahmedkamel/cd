
<?php
    session_start();
    $header = "";
    $error_tip = "";
    $error_message = "";
    $title = "School Registration";
    $content_title = "School Registration";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $content = '
	<!-- multistep form -->
	<!-- progressbar -->
		<ul id="progressbar">
			<li class="active">Account Setup</li>
			<li>School Information</li>
			<li>Personal Details</li>
		</ul>
                <div id = "error_message_div" style="color:red; font-weight:bold; font-size:15px">'.$error_message.'</div><br/>
	<form id="msform" action="SchoolRegistrationValidation.php" method="POST" noValidation>
		
		<!-- fieldsets -->
		
		<div style="align:right; width:400px;">
		    <fieldset>
			    <h3 class="fs-subtitle">Personal Identification</h3>
			    <input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" style="height:50px;" oninput="checkEmailValidity(\'email\')"/>
			    <input value="" type="password" placeholder="Password" class="textbox empty" type="text" id="password" name="password" style="height:50px"/>

			    <input type="button" name="next" class="next action-button" value="Next" id="fnext_id" style="height:40px" />
		    </fieldset>
		    <fieldset>
			    <h3 class="fs-subtitle">School Information</h3>

			    <div>
				<select name="country" id="day" class="dropdown" style="width:48%; height:50px; float:left;">
					<option>Country</option>
				</select> 
				<select name="grade" id="month" class="dropdown" style="width:48%; height:50px; float:left;">
					<option>Grade</option>
				</select> 
			    </div>
			    </br></br>
			    <input value="" placeholder="School Name" class="textbox empty" type="text" name="schoolnameTXT" id="schoolname_id" oninput="checkNameValidity(\'schoolname_id\', \'schoolname\')" style="width:100%; height:50px;" required/>
			    <input value="" placeholder="Twitter Account" class="textbox empty" type="text" name="twitterTXT" id="twitter_id" oninput="" style="width:100%; height:50px"/>
			    <input value="" placeholder="Facebook Page" class="textbox empty" type="text" name="facebookTXT" id="facebook_id" oninput="" style="width:100%; height:50px"/>
			    <input value="" placeholder="Google Plus" class="textbox empty" type="text" name="googleTXT" id="google_id" oninput="" style="width:100%; height:50px"/>
			    <h3 class="mytext">Profile Picture:
			    <input type="file" name="upload" id="upload_id" value="Profile Picture" style="width:60%"></h3>
			    </br>
			    <input type="button" name="previous" class="previous action-button" value="Previous" />
			    <input type="button" name="next" class="next action-button" value="Next" id="snext_id" onClick="nextClick()" />
		    </fieldset>
		    <fieldset>
			    <h3 class="fs-subtitle">Contact Details</h3>

			    <input placeholder="Phone" class="textbox empty" type="text" name="phoneTXT" id="phone" style="width:100%; height:50px" oninput="checkPhoneValidity(\'phone\')"/>
			    <input placeholder="Fax" class="textbox empty" id="fax" type="text" name="faxTXT" id="twitter_id" style="width:100%; height:50px" oninput="checkPhoneValidity(\'fax\')"/>
			    <input placeholder="Address" class="textarea empty" type="textarea" name="addressTXT" id="address_id" oninput="" style="width:100%; height:100px;" />
			    <input type="button" name="previous" class="previous action-button" value="Previous" />
			    <input type="submit" name="srsubmit" class="action-button" value="Submit" id="srsubmit" />
		    </fieldset> 
		</div>
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                
	</form>
        
    <br style="clear: left;" />
    <br style="clear: left;" />
	

	<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/Validation.js" type="text/javascript"></script>
        <script src="js/School Registration.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/SchoolRegistration.css" type="text/css"/>

	<script> var LINK = "schoolregistrationLINK"; </script>


';
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    
    include 'Template/MainTemplate.html';
?>

