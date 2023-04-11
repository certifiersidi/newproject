<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    createUser($conn, $name, $email, $username, $pwd);
}
else {
    header("location: ../signup.php");
    exit();
}
