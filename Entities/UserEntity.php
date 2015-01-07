<?php

class UserEntity
{
    public $id, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender;
    
    public function __construct($id, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender)
    {
	$this->id = $id;
	$this->firstname = $firstname;
	$this->lastname = $lastname;
	$this->email = $email;
	$this->password = $password;
	$this->birthday = $birthday;
	$this->birthmonth = $birthmonth;
	$this->birthyear = $birthyear;
	$this->gender = $gender;
    }
}

