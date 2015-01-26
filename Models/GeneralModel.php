<?php

session_start();
$first = false;

class GeneralModel
{
    static function GetResultSet($result)
    {
	if($result === false) return false;
	if($result === true) return true;
	
	$resultSet = array();
	while($row = mysqli_fetch_assoc($result))
	    array_push($resultSet, $row);
	
	if(!count($resultSet)) return false;
	
	return $resultSet;
    }
    static function PerformQuery($query)
    {
	require ("Credentials.php");
	$connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
	$result = mysqli_query($connection, $query) or die($query.mysqli_error($connection));
	mysqli_close($connection);
	return GeneralModel::GetResultSet($result);
    }
    static function InsertMessage($email,$name,$type,$subject,$message,$userid)
    {
	$query = sprintf("INSERT INTO messages
		(email, userid , name, type, subject, message)
		VALUES
		('%s', '%d', '%s', '%s', '%s', '%s')
		", $email, $userid, $name, $type, $subject, $message);
	
	return GeneralModel::PerformQuery($query);
    }
    
    /*static function SelectUser($user) // checks for matching username and password
    {
	global $first;
	$first = true;
	$query  = 'select * from user';
	if($user->firstname != -1)$query = UserModel::addSuffix($query).' firstname="'.$user->firstname.'"';
	if($user->lastname != -1) $query = UserModel::addSuffix($query).' lastname="'.$user->lastname.'"';
	if($user->email != -1) $query = UserModel::addSuffix($query).' email="'.$user->email.'"';
	if($user->password != -1) $query = UserModel::addSuffix($query).' password="'.$user->password.'"';
	if($user->birthday != -1) $query = UserModel::addSuffix($query).' birthday="'.$user->birthday.'"';
	if($user->birthmonth != -1) $query = UserModel::addSuffix($query).' birthmonth="'.$user->birthmonth.'"';
	if($user->birthyear != -1) $query = UserModel::addSuffix($query).' birthyear="'.$user->birthyear.'"';
	if($user->gender != -1) $query = UserModel::addSuffix($query).' gender="'.$user->gender.'"';
	return UserModel::PerformQuery($query);
    }
    static function UpdateUser(UserEntity $user){
	$query='update user set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
	return UserModel::PerformQuery($query);
    }*/
}

?>
