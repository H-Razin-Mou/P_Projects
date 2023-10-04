<?php
session_start();
include "database.php";

if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        header("Location: loginpage.php?error=User Name is required");
        exit();
    }
    else if(empty($password)) {
        header("Location: loginpage.php?error=Password is required");
        exit();
    }
    else {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['username']===$username && $row['password']=== $password) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }
            else {
                header("Location: loginpage.php?error=Incorrect User name or password");
                exit();
            } 
        }
        else {
            header("Location: loginpage.php?error=Incorrect User name or password");
            exit();
        }
    }
}
else {
    header("Location: loginpage.php?error");
    exit();
}