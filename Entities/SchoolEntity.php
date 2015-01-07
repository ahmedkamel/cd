<?php

class SchoolEntity
{
    public $username, $schoolname, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address, $user_id, $id;
    
    public function __construct($id, $user_id, $username, $schoolname, $country, $grade, $facebook, $twitter, $google, $phone, $fax, $address)
    {
        $this->id = $id;
	$this->username = $username;
	$this->schoolname = $schoolname;
	$this->country = $country;
	$this->grade = $grade;
	$this->facebook = $facebook;
	$this->twitter = $twitter;
	$this->google = $google;
	$this->phone = $phone;
	$this->fax = $fax;
	$this->address = $address;
        $this->user_id = $user_id;
    }
}

?>