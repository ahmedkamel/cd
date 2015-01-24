<?php

    require ("Entities/SchoolEntity.php");
    
    class SchoolModel {
        
        function InsertSchool(SchoolEntity $school){
            $query = sprintf("INSERT INTO school
		(user_id, name, country, grade, facebook, twitter, google, phone, fax, address)
		VALUES
		('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
		",1 , $school->schoolname, $school->country, $school->grade, $school->facebook, $school->twitter, $school->google, $school->phone, $school->fax, $school->address);
	
            $this->PerformQuery($query);
        }
	function SelectSchool($user_id) // checks for matching username and password
        {
            $query  = 'select * from school where user_id="'.$user_id.'";';
            $result = $this->PerformQuery($query);

            if($result == null) return 0;

            while($row= mysqli_fetch_array($result))
            {
                //session_start();
                $_SESSION['school_name'] = $row['name'];
                $_SESSION['school_facebook'] = $row['facebook'];
                $_SESSION['school_twitter'] = $row['twitter'];
                $_SESSION['school_google'] = $row['google'];
                $_SESSION['school_country'] = $row['country'];
                $_SESSION['school_grade'] = $row['grade'];
                $_SESSION['school_address'] = $row['address'];
                $_SESSION['school_phone'] = $row['phone'];
                $_SESSION['school_fax'] = $row['fax'];
                return 1;
            }
            return 0;
        }


        function PerformQuery($query){
            require("Models/Credentials.php");
            $connection  = mysqli_connect($host, $username, $password, $database) or die(mysqli_error());
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            mysqli_close($connection);
            return $result;
        }
        
        
    }



?>