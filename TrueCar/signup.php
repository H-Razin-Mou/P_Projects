<?php
session_start();
include "database.php";

if(isset($_POST['username']) && isset($_POST['password'])
 && isset($_POST['name']) && isset($_POST['repeat_password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $repeatpassword = validate($_POST['repeat_password']);
    $name = validate($_POST['name']);

    $ud = 'username='. $username. '&name='. $name;


    if(empty($name)) {
        header("Location: signuppage.php?error=Name is required&$ud");
        exit();
    }
    else if(empty($username)) {
        header("Location: signuppage.php?error=User Name is required&$ud");
        exit();
    }
    else if(empty($password)) {
        header("Location: signuppage.php?error=Password is required&$ud");
        exit();
    }
    else if(empty($repeatpassword)) {
        header("Location: signuppage.php?error=Re Password is required&$ud");
        exit();
    }
    else if($password !== $repeatpassword) {
        header("Location: signuppage.php?error=The confirmation password does not match&$ud");
        exit();
    }
    else {
        $password = md5($password);
        $query1 = "SELECT * FROM users WHERE username='$username'";
        $r1 = mysqli_query($conn,$query1);

        if(mysqli_num_rows($r1)>0) {
            header("Location: signuppage.php?error=The username is already taken&$ud");
            exit();
        }
        else {
            $query2 = "INSERT INTO users(username,password,name) values('$username','$password','$name')";
            $r2 = mysqli_query($conn,$query2);

            if($r2) {
                header("Location: signuppage.php?success=Your account has been created successfully");
                exit();
            }
            else {
                header("Location: signuppage.php?error=unknown error occured&$ud");
                exit();
            }
        }
    }
}
else {
    header("Location: loginpage.php?error");
    exit();
}