<?php

require ("../Models/UserModel.php");

session_start();
$EMPTY = 1;
$WRONG = 2;
$USED = 3;
$OK = 4;

if(isset($_GET['functionName']))
{
    $functionName = $_GET['functionName'];
    UserController::$functionName();
}
else
{
    $_POST['error_tip'] = 'Sorry, something went wrong.';
    if(isset($_POST['user_id']))
	header("Location:../Home.php");
    else header("Location:../FrontPage.php");
}

class UserController {
    static function SignUp()
    {
	$firstname_flag = $OK;
	$lastname_flag = $OK;
	$email_flag = $OK;
	$password_flag = $OK;
	$birthday_flag = $OK;
	$birthmonth_flag = $OK;
	$birthyear_flag = $OK;
	$gender_flag = $OK;

	if(!isset($_POST["firstname"])){$firstname_flag = $EMPTY;}
	if(!isset($_POST["lastname"])){$lastname_flag = $EMPTY;}
	if(!isset($_POST["email"])){$email_flag = $EMPTY;}
	if(!isset($_POST["password"])){$password_flag = $EMPTY;}
	if(!isset($_POST["birthday"])){$birthday_flag = $EMPTY;}
	if(!isset($_POST["birthmonth"])){$birthmonth_flag = $EMPTY;}
	if(!isset($_POST["birthyear"])){$birthyear_flag = $EMPTY;}
	if(!isset($_POST["gender"])){$gender_flag = $EMPTY;}


	if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK && $birthday_flag == $OK && $birthmonth_flag == $OK && $birthyear_flag == $OK && $gender_flag == $OK)
	{
	    extract($_POST);
	    $user = new UserEntity(-1, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender);
            if (UserModel::SelectUser($user) == false)
            {
                if(UserModel::InsertUser($user) == true)
                {
                    header("Location: ../RegistrationComplete.php");
                }
                else
                {
                    $_SESSION['error_message'] = "Sorry, something went wrong.";
                    header("Location: ../SignUp.php");
                }
            }
            else
            {
                $_SESSION['error_tip'] = "This email address is already registered.";
                header("Location: ../SignUp.php");
            }
	}
	else
	{
	    $_SESSION['error_tip'] = "You have to fill all the fields.";
	    header("Location: ../SignUp.php");
	}
    }
    static function UpdateProfile()
    {
	$firstname_flag = $OK;
	$lastname_flag = $OK;
	$email_flag = $OK;
	$password_flag = $OK;

	if(!isset($_POST["firstname"])){$firstname_flag = $EMPTY;}
	if(!isset($_POST["lastname"])){$lastname_flag = $EMPTY;}
	if(!isset($_POST["email"])){$email_flag = $EMPTY;}
	if(!isset($_POST["passwordnew"])){$password_flag = $EMPTY;}

	if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK )
	{
	    extract($_POST);
	    $user = new UserEntity(-1, $firstname, $lastname, $email, $passwordnew, "", "", "", "");

	    if(UserModel::UpdateUser($user) == true)
	    {
		$_SESSION['error_tip'] = 'Your profile has been updated successfully.';
		header("Location: ../Profile.php");
	    }
	    else
	    {
		$_SESSION['error_message'] = 'Sorry, something went wrong.';
		header("Location: ../Settings.php");
	    }
	}
	else
	{
	    $_SESSION['error_message'] = 'You have to fill all the fields.';
	    header("Location: ../Settings.php");
	}
    }
    static function SignIn()
    {
	$email_flag = $OK;
	$password_flag = $OK;

	if(!isset($_POST["email"])){$email_flag = $EMPTY;}
	if(!isset($_POST["password"])){$password_flag = $EMPTY;}

	if($email_flag == $OK && $password_flag == $OK)
	{
	    extract($_POST);
	    $user = new UserEntity(-1, "", "", $email, $password, "", "", "", "");

	    if(UserModel::SelectUser($user) == true)
		header("Location: ../Home.php");
	    else
	    {
		$_SESSION['error_message'] = "Wrong email or password.";
		header("Location: ../SignIn.php");
	    }
	}
	else
	{
	    $_SESSION['error_tip'] = "You must enter the email and password fields.";
	    header("Location: ../SignIn.php");
	}
    }
}


?>
