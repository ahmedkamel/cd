<?php
    
    session_start();
    
    if(isset($_SESSION['user_id']) == false)
	header("Location: FrontPage.php");
    else
    {
	$error_tip = "";
	$error_message = "";
	
	if(isset($_SESSION['error_tip']) == true){$error_tip = $_SESSION['error_tip'];}
	if(isset($_SESSION['error_message']) == true)$error_message = $_SESSION['error_message'];

	$title = "Coding Door";
	$content_title = "Under Construction ...";//"Welcome back ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."!";
	$content = '
	    
	<div align="center">
	    <h2 align="center" style="font-size: 36px; font-weight: bold;">Training Platform</h2>
	    <!--h3 align="center" style="color:#636363; font-size:20px;">Create your university training platform now!</h3-->
	    
	    <br/>
	    <div align="center"><img width="120" height="120" src="css/images/premium.png" alt=""></div>
	    <br/>
	    
	    <div style="padding: 0 10px 0 10px;">
		<h3 style="color:#636363; font-size:20px; text-align:center;">Welcome visitor!<br/><br/></h3>
		<p style="color:#636363; font-size:18px; text-align:justify;">We are proud to announce Coding Door\'s beta version. It has been a long journey till we made it to this point! Thanks to everyone supported us and helped out to bring Coding Door to life!<br/><br/>As a quick start, we\'re just running AAST ACM Training and you will be one of our first users! So we\'ll be waiting for your kind feedbacks and bugs\' reporting, thanks in advance!</p>
	    </div>
	    <!--div style="padding-right:10px; "><h3 style=" color:#636363; font-size:20px;">Coding Door currently supports:</h3></div>
	    <div style="padding-top:13px;"><p>Notice that this process must be done by school owner or director as it will need school verification and payements for premium accounts.</p></div>
	    <div align="center"><button class="button" onclick="location.href=\'SchoolRegistration.php\';">Register School</button></div-->
	</div>
	
<label style="font: normal normal normal 65px/1.4em avenida-w01,avenida-w02,fantasy; color: #CFD0D1;">Under Construction!</label>

<iframe style="width:100%; height:100%;" id="me">OPC Calendar will appear here!</iframe>

<a href="#" onclick="document.getElementById(\'me\').src=\'Panels/OPCCalendar.html\';">Click</a>
 
 


	<script>var LINK = "homeLINK";</script>
	';

	$_SESSION['error_tip'] = "";
	$_SESSION['error_message'] = "";
    }
    include 'Template/MainTemplate.php';
    
?>