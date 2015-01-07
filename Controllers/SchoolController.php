<?php

require ("Models/SchoolModel.php");
session_start();
class SchoolController {
    
    function InsertSchool()
    {
        $email = $_POST["emailTXT"];
        $password =  $_POST["passwordTXT"];
	$schoolName = $_POST["schoolnameTXT"];
	$twitter = $_POST["twitterTXT"];
	$facebook = $_POST["facebookTXT"];
	$google = $_POST["googleTXT"];
	$phone = $_POST["phoneTXT"];
	$fax = $_POST["faxTXT"];
	$address = $_POST["addressTXT"];
	$country = $_POST["country"];
        $grade = $_POST["grade"];
        $user_id = $_SESSION['user_id'];
	
	$school = new SchoolEntity (-1,$user_id, $email, $schoolName, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address);
	
	$schoolModel = new SchoolModel();
	$schoolModel->InsertSchool($school);
    }
    
    function selectSchool($user_id){
        $schoolModel = new SchoolModel();
        $schoolModel->SelectSchool($user_id);
    }
}
?>
