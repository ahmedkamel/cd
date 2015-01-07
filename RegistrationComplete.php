<?php

    session_start();
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "Home Page";
    $content_title = "Registration Completed Successfully!";
    $content = "We have sent you an email to verify your account. Please check your email inbox, and maybe the spam box too.";
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    
    
    include 'Template/MainTemplate.html';

?>