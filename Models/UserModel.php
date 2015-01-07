<?php

require ("../Entities/UserEntity.php");
session_start();

class UserModel
{
    static function PerformQuery($query)
    {
	require ("Credentials.php");
	$connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	mysqli_close($connection);
	return $result;
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
	$result = UserModel::PerformQuery($query);

	if($result == null) return 0;

	while($row= mysqli_fetch_array($result))
	{
	    session_start();
	    $_SESSION['user_id'] = $row['id'];
	    $_SESSION['user_firstname'] = $row['firstname'];
	    $_SESSION['user_lastname'] = $row['lastname'];
	    $_SESSION['user_email'] = $row['email'];
	    $_SESSION['user_gender'] = $row['gender'];
	    $_SESSION['user_birthday'] = $row['birthday'];
	    $_SESSION['user_birthmonth'] = $row['birthmonth'];
	    $_SESSION['user_birthyear'] = $row['birthyear'];
	    return 1;
	}
	return 0;
    }
    static function UpdateUser(UserEntity $user){
	$query='update user set firstname="'.$user->firstname.'" ,lastname="'.$user->lastname.'" ,password="'.$user->password.'" where email="'.$user->email.'"';
	return UserModel::PerformQuery($query);
    }
}

?>
