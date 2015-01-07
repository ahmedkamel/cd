<?php

class UserEntity_Old
{
    public $id, $username, $password, $count_login, $full_name, $first_name, $middle_name, $last_name, $photo, $gender, $birthday, $agree_send_mail, $address_1, $address_2, $city, $state, $zip, $country, $agree_call, $mobile, $homephone, $agree_send_fax, $fax, $email, $role, $if_other, $ban, $number_of_logins, $signed, $public_ip, $timestamp, $note;
    public $security_q1, $security_q2, $security_q3, $security_a1, $security_a2, $security_a3;
    
    public function __construct($id, $role, $first_name, $middle_name, $last_name, $email, $username, $password, $birthday, $gender, $country, $city, $address_1, $address_2, $zip, $mobile, $homephone, $fax, $security_question_1, $security_answer_1, $security_question_2, $security_answer_2, $security_question_3, $security_answer_3)
    {
	$this->id = $id;
	$this->role = $role;
	$this->first_name = $first_name;
	$this->middle_name = $middle_name;
	$this->last_name = $last_name;
	$this->email = $email;
	$this->username = $username;
	$this->password = $password;
	$this->birthday = $birthday;
	$this->gender = $gender;
	$this->country = $country;
	$this->city = $city;
	$this->address_1 = $address_1;
	$this->address_2 = $address_2;
	$this->zip = $zip;
	$this->mobile = $mobile;
	$this->homephone = $homephone;
	$this->fax = $fax;
	$this->security_q1 = $security_question_1;
	$this->security_a1 = $security_answer_1;
	$this->security_q2 = $security_question_2;
	$this->security_a2 = $security_answer_2;
	$this->security_q3 = $security_question_3;
	$this->security_a3 = $security_answer_3;
    }
}

?>