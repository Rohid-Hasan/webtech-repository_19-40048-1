<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($userName) && isset($password)) {

        $servername = "localhost";
        $dbUserName = "root";
        $dbPass = "";
        $dbname = "lab6";

        // Create connection
        $conn = new mysqli($servername, $dbUserName, $dbPass, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "insert into user(userName, pass) values ('{$userName}','{$password}')";
        if ($conn->query($sql) === TRUE) {
            header("Location:dashboard.php");
            exit();
          } else {
            $exist="Opps! I don't know why this error occourd but I Can not insert you as a user!";
        }
        $conn->close();
    }else{
        echo "Can Not connect to database";
    }
}
