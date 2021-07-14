<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameErr = $passErr = "";
    $userName = $password = "";
  

    if (empty($_POST["userName"])) {
      $nameErr = "UserName is required";
    }else{
      $userName = $_POST["userName"];
    }

    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    }else{
      $password = $_POST["password"];
    }

    if(!empty($_POST["userName"])||!empty($_POST["password"])){
      $cuserName = 'name';
      $cpassword = 'password';
      setcookie($cuserName, $userName, time() + (86400 * 30), "/");
      setcookie($cpassword, $password, time() + (86400 * 30), "/");
    }

}

?>