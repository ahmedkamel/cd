<?php

$user= "root";
$pass= "";
$hostname= "localhost";
$db = @mysql_connect($hostname,$user,$pass) or die ("could not connect to database");
$select = mysql_select_db("usersettings",$db);

$firstname=$_POST['firstnameTXT'];
$lastname=$_POST['lastnameTXT'];
$email=$_POST['emailTXT'];
$password_old=$_POST['passwordTXT'];
$password_new=$_POST['passwordTXT1'];
//$query="update usertab set firstname='.$firstname.' ,lastname='.$lastname.' ,email='.$email.' ,password_new='.$password_new.' where password='.$password_old.' ";
//$query="insert into usertab values ('.$firstname.','.$lastname.','.$email.','.$password_new.')";
#$check="select password from usertab";
$query="update usertab set firstname='.$firstname.' ,lastname='.$lastname.',password='.$password_new.' where email='.$email.'";
#echo '$check';
$result=mysql_query($query);
  if($result){
    header("location:update_success.php");
    //echo 'there is Error!';
  }
  else
  {
     echo 'there is Error!';
	 //header("location:update_success.php");
  } 
mysql_close($db);
?>