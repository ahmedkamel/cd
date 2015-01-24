<?php

require ("../Entities/UserEntity.php");
session_start();

class UserModel
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
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	mysqli_close($connection);
	return UserModel::GetResultSet($result);
    }
    static function InsertUser(UserEntity $user)
    {
	$query = sprintf("INSERT INTO user
		(firstname, lastname, email, password, birthday, birthmonth, birthyear, gender)
		VALUES
		('%s', '%s', '%s', '%s', '%d', '%d', '%d', '%d')
		", $user->firstname, $user->lastname, $user->email, $user->password, $user->birthday, $user->birthmonth, $user->birthyear, $user->gender);
	
	return UserModel::PerformQuery($query);
    }
    static function SelectUser($user) // checks for matching username and password
    {
	$query  = 'select * from user where email="'.$user->email.'" and password="'.$user->password.'";';
	return UserModel::PerformQuery($query);
    }
    static function UpdateUser(UserEntity $user){
	$query='update user set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
	return UserModel::PerformQuery($query);
    }
}

?>
