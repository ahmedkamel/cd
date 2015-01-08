<?php

    session_start();
    $header = "";
    $error_tip = "";
    $error_message = "";
    $title = "School Registration";
    $content_title = "School Registration";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "Home Page";
    $content_title = "</br></br></br></br></br>You Have Successfuly Registered Your School!";
    $content = "</br></br></br></br></br></br></br></br></br></br>";
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
	
    include 'Template/MainTemplate.html';

?>