<?php

    session_start();
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "Home Page";
    $content_title = "Your message was succesfully sent!";
    $content = "we will be reviewing it as soon as we can, and we will reach out to you if needed!";
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    
    
    include 'Template/MainTemplate.php';

?>