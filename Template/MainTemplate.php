<?php
    $header = '';
    $topNav = '
    <nav class="top-nav">
	    <div class="logoPanel">
		<img src="./css/images/logo.png" style="width: 260px; height: 80px; margin-left: 150px; margin-top: -28px;">
	    </div>
	    <span class="top-nav-shadow-up"></span>
	    <div class="shell">

		    <span class="top-nav-shadow"></span>
		    <ul>
			    <li id="homeLINK"><span><a href="Home.php">Home</a></span></li>
			    <li id="profileLINK"><span><a href="Profile.php">Profile</a></span></li>
			    <li id="settingsLINK"><span><a href="Settings.php">Settings</a></span></li>
			    <li id="signupLINK"><span><a href="SignUp.php">Sign Up</a></span></li>
			    <li id="signinLINK"><span><a href="SignIn.php">Sign In</a></span></li>
			    <li id="homeLINK"><span><a href="SignOut.php">Sign Out</a></span></li>
		    </ul>
	    </div>
    </nav>';
    
    include 'Template/MainTemplate.html';
?>