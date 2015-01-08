
<?php
        require './Controllers/SchoolController.php';
        
        $email=0;$password=0;$schoolname=0;$twitter=0;$facebook=0;$google=0;$phone=0;$fax=0;$address=0;$country=0;$grade=0;$photo=0;
	
        if (isset($_POST["emailTXT"]))
            $email = $_POST["emailTXT"];
        if (isset($_POST["passwordTXT"]))
            $password =  $_POST["passwordTXT"];
        if (isset($_POST["schoolnameTXT"]))
            $schoolName = $_POST["schoolnameTXT"];
        if (isset($_POST["twitterTXT"]))
            $twitter = $_POST["twitterTXT"];
        if (isset($_POST["facebookTXT"]))
            $facebook = $_POST["facebookTXT"];
        if (isset($_POST["googleTXT"]))
            $google = $_POST["googleTXT"];
        if (isset($_POST["phoneTXT"]))
            $phone = $_POST["phoneTXT"];
        if (isset($_POST["faxTXT"]))
            $fax = $_POST["faxTXT"];
        if (isset($_POST["addressTXT"]))
            $address = $_POST["addressTXT"];
        if (isset($_POST["country"]))
            $country = $_POST["country"];
        if (isset($_POST["grade"]))
            $grade = $_POST["grade"];
        if (isset($_POST["upload"]))
            $photo = $_POST["upload"];
        
        validateAll($email,$password,$schoolName,$twitter,$facebook,$google,$phone,$fax,$address,$country,$grade,$photo);
        
        function checkUserAvailability($email,$password){
            require ("Models/UserModel.php");
            $user = new UserEntity ("","","",$email,$password,"","","","");
            $userModel = new UserModel();
            
            if($userModel->LoginUser($user) == false) return false;
            return true;
        }
        
        function validateAll($email,$password,$schoolName,$twitter,$facebook,$google,$phone,$fax,$address,$country,$grade,$photo){
            $res1 = validateEmail($email);
            $res2 = validatePassword($password);
            $res3 = validateCountry($country);
            $res4 = validateGrade($grade);
            $res5 = validateSchoolName($schoolName);
            $res6 = validatePhone($phone);
            $res7 = validatePhone($fax);
            $res8 = validatePhoto($photo);
            if (!checkUserAvailability($email,$password)){
                //echo '<script type="text/javascript">alert("ERROR IN DATABASE");</script>';
                header("Location: SchoolRegistration.php");
                $_SESSION['error_message'] = "Wrong Email or Password!";
                return;
            }
            if (!$res1 || !$res2 || !$res3 || !$res4 || !$res5 || !$res6 || !$res7 || !$res8){
                //echo '<script type="text/javascript">alert("ERROR IN VALIDATION");</script>';
                header("Location: SchoolRegistration.php");
                $_SESSION['error_message'] = "Some of Your Inputs Formats are Wrong!";
            } else {
                // Where the file is going to be placed 
                $target_path = "Images/";

                /* Add the original filename to our target path.  
                Result is "uploads/filename.extension" */
                $target_path = $target_path . basename( $_FILES['uploadedfile'][$_File['upload']]); 
                
                $schoolController = new SchoolController();
                $schoolController->InsertSchool();
                header("Location: SchoolRegistrationComplete.php");
                $_SESSION['error_message'] = "";
            }
            
 
        }
        
        function validateEmail ($email){         
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } 
            return false;
        }
        
        function validatePassword ($password){
            $len = strlen($password);
            if ($len == 0) return false;
            echo "password true\n";
            return true;
        }
        
        function validateCountry ($country){
            if ($country == 'Country') return false;
            echo "Country true\n";
            return true;
        }
        
        function validateGrade ($grade){
            if ($grade == 'Grade') return false;
            echo "Grade true\n";
            return true;
        }
        
        function validateSchoolName ($schoolName){
            $len = strlen ($schoolName);
            if ($len == 0) return false;
            for ($i = 0; $i<$len; $i++){
                if (!ctype_alpha ( $schoolName[$i] ) && $schoolName[$i] != ' '){
                    return false;
                }
            }
            echo "School Name true\n";
            return true;
        }
        
        function isNum ($digit){
            if ($digit >= '0' && $digit <= '9') return true;
            return false;
        }
        
        function validatePhone ($phone){
            $len = strlen($phone);
            if ($len < 8) return false;
            if (!isNum($phone[0]) && $phone[0] != '+') return false;
            for ($i=1; $i<$len; $i++){
                if (!isNum($phone[$i])) return false;
            }
            echo "Phone true\n";
            return true;
        }
        
        function validatePhoto ($photo){
            if (isset($_POST["upload"])) return true;
            return false;
        }
    
?>

