<?php

require ("../Entities/UserEntity.php");
session_start();
$first = false;

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
	$result = mysqli_query($connection, $query) or die($query.mysqli_error($connection));
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
    static function addSuffix($query)
    {
	global $first;
	if($first)
	{
	    $first = false;
	    return $query.' where';
	}
	return $query.' and';
    }
    static function addSuffixUpdate($query)
    {
	global $first;
	if($first)
	{
	    $first = false;
	    return $query.' set';
	}
	return $query.', ';
    }
    static function SelectUser($user) // checks for matching username and password
    {
	global $first;
	$first = true;
	$query  = 'select * from user';
	if($user->id != -1)$query = UserModel::addSuffix($query).' id="'.$user->id.'"';
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
	global $first;
	$first = true;
	$query = 'update user';
	if($user->firstname != -1)$query = UserModel::addSuffixUpdate($query).' firstname="'.$user->firstname.'"';
	if($user->lastname != -1) $query = UserModel::addSuffixUpdate($query).' lastname="'.$user->lastname.'"';
	if($user->email != -1) $query = UserModel::addSuffixUpdate($query).' email="'.$user->email.'"';
	if($user->password != -1) $query = UserModel::addSuffixUpdate($query).' password="'.$user->password.'"';
	if($user->birthday != -1) $query = UserModel::addSuffixUpdate($query).' birthday="'.$user->birthday.'"';
	if($user->birthmonth != -1) $query = UserModel::addSuffixUpdate($query).' birthmonth="'.$user->birthmonth.'"';
	if($user->birthyear != -1) $query = UserModel::addSuffixUpdate($query).' birthyear="'.$user->birthyear.'"';
	if($user->gender != -1) $query = UserModel::addSuffixUpdate($query).' gender="'.$user->gender.'"';
	$query = $query.' where id = '.$_SESSION['user_id'];
	return UserModel::PerformQuery($query);
    }
}

?>
