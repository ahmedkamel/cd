<?php

require ("Entities/UserEntity.php");

class UserModel_Old
{
    function InsertUser(UserEntity $user)
    {
	$query = sprintf("INSERT INTO user
		(user_username, user_password, user_first_name, user_middle_name, user_last_name, user_gander, user_date_of_birth, user_agree_send_mail, user_address_line_1, user_address_line_2, user_city, user_zip, user_country, user_agree_call, user_cell, user_phone_1, user_agree_send_fax, user_fax, user_email, user_role, user_security_q1, user_security_a1, user_security_q2, user_security_a2, user_security_q3, user_security_a3)
		VALUES
		('%s', '%s', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
		", mysql_real_escape_string($user->username), mysql_real_escape_string($user->password), mysql_real_escape_string($user->first_name), mysql_real_escape_string($user->middle_name), mysql_real_escape_string($user->last_name), mysql_real_escape_string($user->gender), mysql_real_escape_string($user->birthday), mysql_real_escape_string($user->agree_send_mail), mysql_real_escape_string($user->address_1), mysql_real_escape_string($user->address_2), mysql_real_escape_string($user->city), mysql_real_escape_string($user->zip), mysql_real_escape_string($user->country), mysql_real_escape_string($user->agree_call), mysql_real_escape_string($user->mobile),  mysql_real_escape_string($user->homephone), mysql_real_escape_string($user->agree_send_fax), mysql_real_escape_string($user->fax), mysql_real_escape_string($user->email), mysql_real_escape_string($user->role), mysql_real_escape_string($user->security_q1), mysql_real_escape_string($user->security_a1), mysql_real_escape_string($user->security_q2), mysql_real_escape_string($user->security_a2), mysql_real_escape_string($user->security_q3), mysql_real_escape_string($user->security_a3));
	
	$this->PerformQuery($query);
    }
    function PerformQuery($query)
    {
	require 'Models/Credentials.php';
	mysql_connect($host, $username, $password) or die(mysql_error());
	mysql_select_db($database);
	
	mysql_query($query) or die(mysql_error());
	mysql_close();
    }
}

?>
