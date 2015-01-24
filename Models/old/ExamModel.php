<?php

require ("Entities/ExamEntity.php");

    class ExamModel {
        
        function GetProblems(){
            session_start();
            $userID = $_SESSION['user_id'];
            $query1  = 'select * from exampaper where studentid='.$userID; 
            $result = $this->PerformQuery($query1);

            if($result == null) return "";
            $problemTXT = array();
            
            while ($row1= mysqli_fetch_array($result)){
                $query  = 'select * from problem where examid='.$row1['examid'];
                $result2 = $this->PerformQuery($query);
                if($result2 == null) return "";
                
                $problemTXT[0] = $this->GetExamTitle($row1);
                while($row = mysqli_fetch_array($result2))
                    $problemTXT[] = $row['text'];
                
                return $problemTXT;
            }
            
            return "";
        }
        
        function GetExamTitle($row1){
            
                $query2  = 'select * from exam where id='.$row1['examid'];
                $result2 = $this->PerformQuery($query2);

                if($result2 == null) return "";
                while($row2 = mysqli_fetch_array($result2)){
                    $title = $row2['title'];
                }
                
                return $title;
            
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

