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

/*
<?php

class UserEntity
{
    public $id, $firstname, $lastname, $email, $password, $birthday, $birthmonth, $birthyear, $gender;
    public $rows = array();
    
    public function __construct($rows)
    {
	$this->rows = $rows;
	
	if(isset($rows['id'])) $this->id = $rows['id'];
	if(isset($rows['firstname'])) $this->firstname = $rows['firstname'];
	if(isset($rows['lastname'])) $this->lastname = $rows['lastname'];
	if(isset($rows['email'])) $this->email = $rows['email'];
	if(isset($rows['password'])) $this->password = $rows['password'];
	if(isset($rows['birthday'])) $this->birthday = $rows['birthday'];
	if(isset($rows['birthmonth'])) $this->birthmonth = $rows['birthmonth'];
	if(isset($rows['birthyear'])) $this->birthyear = $rows['birthyear'];
	if(isset($rows['gender'])) $this->gender = $rows['gender'];
    }
}


 */