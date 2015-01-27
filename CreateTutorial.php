<?php

    session_start();

    if(!isset($_SESSION['user_id']))
    {
        $_SESSION['error_tip'] = 'You should login to access this page';
        header("Location: SignIn.php");
    }
    else
    {
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "New Tutorial";
    $content_title = "New Tutorial";
    $content = '
       
        <form method="post" action="somepage">
            <texteditor name="content" style="width:100%; height:400px"></texteditor></br>
            <input value="Submit" type="submit" name="button" class="button" id="submit"/>
        </form>



    ';
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    }
    
    include 'Template/MainTemplate.php';

?>