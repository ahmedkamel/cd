
<?php
    session_start();
    $header = "";
    $error_message = "";
    $error_tip = "";
    $title = "Sign In";
    $content_title = "";
    $content = "";
    if(isset($_SESSION['user_id']))
    {
	session_destroy();
	header("Location: FrontPage.php");
    }
    else
    {
	header("Location: FrontPage.php");
    }
    
include 'Template/MainTemplate.html';
?>