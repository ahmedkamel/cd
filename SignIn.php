
<?php
    session_start();
    
    if(isset($_SESSION['user_id']))
    {
	$_SESSION['error_tip'] = 'You cannot access this page, as you are already logged in!';
	header("Location: Home.php");
    }
    else
    {
	$error_tip = "";
	$error_message = "";
	$header = "";
	if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
	if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
	$title = "Sign In";
	$content_title = "Sign In";
	$content = 
	'
	    <div align="Center">
		<form action="Controllers/UserController.php?functionName=SignIn" method="post">

		    <input value="" placeholder="Email" class="textbox empty" type="text" name="email" id="email" style="width:33%;" required />
		    </br>
		    <input value="" type="password" placeholder="Password" class="textbox empty" id="password" name="password" style="width:33%;" required/>
		    </br>
		    <label style="color:red; font-weight:bold; font-size:15px">'.$error_message.'</label>
		    </br></br>
		    <input value="Sign In" type="submit" class="button"/>
	    </form>
	    </div>

	    <script src="js/Validation.js" type="text/javascript"></script>
	    <script> var LINK = "signinLINK"; </script>
	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    }
    include 'Template/MainTemplate.html';
?>