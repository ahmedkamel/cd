<?php
require ("../Models/GeneralModel.php");

if(isset($_GET['functionName']))
{
    $functionName = $_GET['functionName'];
    GeneralController::$functionName();
}
else
{
    $_POST['error_tip'] = 'Sorry, something went wrong.';
    if(isset($_POST['user_id']))
	header("Location:../Home.php");
    else header("Location:../FrontPage.php");
}


function ValidatContactusForm()
{
    $EMPTY = "1";
    $WRONG = "2";
    $USED = "3";
    $OK = "4";
    
    $email_flag = $OK;
    $message_flag = $OK;
    $type_flag = $OK;
    $subject_flag = $OK;

    
    if(!isset($_POST["email"]) || $_POST["email"] == "") $email_flag = $EMPTY;
    if(!isset($_POST["message"]) || $_POST["message"] == "") $message_flag = $EMPTY;
    if(!isset($_POST["messagetype"])) $type_flag = $EMPTY;
    if(!isset($_POST["subject"]) || $_POST["subject"] == ""){
    	if (isset($_POST["messagetype"]) && $_POST["messagetype"] == 3){
    		$subject_flag = $EMPTY;
    	}
    }
    //die($subject_flag);

    if($email_flag == $OK && $message_flag == $OK && $type_flag == $OK && $subject_flag == $OK)
	return true;
    
    return false;
}

class GeneralController {
    static function InsertMessage()
    {
		if(ValidatContactusForm())
		{
		    extract($_POST);
		    $userid = -1;
            if(isset($_SESSION["user_id"])) $userid = $_SESSION["user_id"];
	        if(GeneralModel::InsertMessage($email,$name,$messagetype, $subject,$message,$userid) === true)
	        {
                $_SESSION['error_tip'] = "";
	            header("Location: ../MessageSent.php");
	        }
	        else
	        {
	            $_SESSION['error_tip'] = "Sorry, something went wrong.";
	            header("Location: ../ContactUs.php");
	        }       
		}
		else
		{
            //die("here");
		    $_SESSION['error_tip'] = "You have to fill all the fields.";
		    header("Location: ../ContactUs.php");
		}
    }

}


?>
