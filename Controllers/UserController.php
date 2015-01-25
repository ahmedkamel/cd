<?php

require ("../Models/UserModel.php");

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

$EMPTY = 1;
$WRONG = 2;
$USED = 3;
$OK = 4;

function ValidateSignUpForm()
{
    global $OK;
    global $EMPTY;
    
    $firstname_flag = $OK;
    $lastname_flag = $OK;
    $email_flag = $OK;
    $password_flag = $OK;
    $birthday_flag = $OK;
    $birthmonth_flag = $OK;
    $birthyear_flag = $OK;
    $gender_flag = $OK;

    if(!isset($_POST["firstname"])) $firstname_flag = $EMPTY;
    if(!isset($_POST["lastname"])) $lastname_flag = $EMPTY;
    if(!isset($_POST["email"])) $email_flag = $EMPTY;
    if(!isset($_POST["password"])) $password_flag = $EMPTY;
    if(!isset($_POST["birthday"])) $birthday_flag = $EMPTY;
    if(!isset($_POST["birthmonth"])) $birthmonth_flag = $EMPTY;
    if(!isset($_POST["birthyear"])) $birthyear_flag = $EMPTY;
    if(!isset($_POST["gender"])) $gender_flag = $EMPTY;

    if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK && $birthday_flag == $OK && $birthmonth_flag == $OK && $birthyear_flag == $OK && $gender_flag == $OK)
	return true;
    
    return false;
}

function ValidateUpdateProfileForm()
{
    global $OK;
    global $EMPTY;
    
    $firstname_flag = $OK;
    $lastname_flag = $OK;
    $email_flag = $OK;
    $password_flag = $OK;

    if(!isset($_POST["firstname"])) $firstname_flag = $EMPTY;
    if(!isset($_POST["lastname"])) $lastname_flag = $EMPTY;
    if(!isset($_POST["email"])) $email_flag = $EMPTY;
    if(!isset($_POST["passwordnew"])) $password_flag = $EMPTY;
    
    if($firstname_flag == $OK && $lastname_flag == $OK && $email_flag == $OK && $password_flag == $OK)
	return true;
    return false;
}

class UserController {
    static function SignUp()
    {
	if(ValidateSignUpForm())
	{
	    extract($_POST);
	    $user = new UserEntity(-1, $firstname, $lastname, $email, md5($password), $birthday, $birthmonth, $birthyear, $gender);
            $userEmail = new UserEntity(-1, -1, -1, $email, -1, -1, -1, -1, -1);
	    if (UserModel::SelectUser($userEmail) === false)
            {
                if(UserModel::InsertUser($user) === true)
                {
                    header("Location: ../RegistrationComplete.php");
                }
                else
                {
                    $_SESSION['error_tip'] = "Sorry, something went wrong.";
                    header("Location: ../SignUp.php");
                }
            }
            else
            {
                $_SESSION['error_message'] = "This email address is already registered.";
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
	if(ValidateUpdateProfileForm() === true)
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
	global $OK;
	global $EMPTY;
	
	$email_flag = $OK;
	$password_flag = $OK;

	if(!isset($_POST["email"])){$email_flag = $EMPTY;}
	if(!isset($_POST["password"])){$password_flag = $EMPTY;}

	if($email_flag == $OK && $password_flag == $OK)
	{
	    extract($_POST);
	    $user = new UserEntity(-1, -1, -1, $email, md5($password), -1, -1, -1, -1);
	    $resultUser = UserModel::SelectUser($user);
	    
	    if($resultUser != false)
	    {
		$_SESSION['user_id'] = $resultUser[0]['id'];
		$_SESSION['user_firstname'] = $resultUser[0]['firstname'];
		$_SESSION['user_lastname'] = $resultUser[0]['lastname'];
		$_SESSION['user_email'] = $resultUser[0]['email'];
		$_SESSION['user_gender'] = $resultUser[0]['gender'];
		$_SESSION['user_birthday'] = $resultUser[0]['birthday'];
		$_SESSION['user_birthmonth'] = $resultUser[0]['birthmonth'];
		$_SESSION['user_birthyear'] = $resultUser[0]['birthyear'];
		header("Location: ../Home.php");
	    }
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
