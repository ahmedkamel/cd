<?php
    $header = '';
    $topNav = '';
    
    if(isset($_SESSION['user_id']))
    {
	$topNav = '
	<nav class="top-nav">
		<div class="logoPanel">
		    <img src="./css/images/logo.png" style="float: left; width: 260px; height: 80px; margin-left: 150px; margin-top: -28px;">
		    <input value="" placeholder="Search for anything through the site." class="textbox empty" type="text" name="search" id="search" style="float: left; margin-top:10px; width:30%;"/>
		    <div style="font-size: 16px; font-weight: bold; margin-top:25px; margin-right:160px; float:right;">
			<a href="Profile.php">'.$_SESSION["user_firstname"].' '.$_SESSION["user_lastname"].'</a>
			<span> | </span>
			<a href="SignOut.php">Logout</a>
		    </div>
		</div>
		<span class="top-nav-shadow-up"></span>
		<div class="shell">

			<span class="top-nav-shadow"></span>
			<ul>
				<li id="homeLINK"><span><a href="Home.php">Home</a></span></li>
				<li id="profileLINK"><span><a href="Profile.php">Profile</a></span></li>
				<li id="settingsLINK"><span><a href="Settings.php">Settings</a></span></li>
				<!--li id="contactusLINK"><span><a href="ContactUs.php">Contact Us</a></span></li-->
			</ul>
		</div>
	</nav>';
	include 'Template/MainTemplate.html';
    }
    else
    {
	include 'Template/FrontPageTemplate.php';
    }
    
?>