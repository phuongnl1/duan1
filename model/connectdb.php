<?php
    function connectdb(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mvc";

        try {
            $conn = new PDO("mysql:host=$servername;port=3306;dbname=".$database, $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>