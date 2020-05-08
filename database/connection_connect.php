<?php
        
        $servername = "localhost";
        $username = "test";
        $password = "123456";
        $dbname = "db_test01";
        //Create connection
        $conn = new mysqli($servername,$username, $password);
        //check connection
        if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
        
        }
        


        //Connect database
        if(!$conn->select_db($dbname)){
                die("Connection failed: ".$conn->connect_error);
        }

        
?>