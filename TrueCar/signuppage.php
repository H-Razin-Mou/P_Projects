<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
    <title>Register</title>
</head>
<body>
    <form action="signup.php" method="post">
        <h2>SIGN UP</h2>
        <?php if(isset($_GET['error'])) { ?>
           <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if(isset($_GET['success'])) { ?>
           <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if(isset($_GET['name'])) { ?>
           <input type="text" name="name" placeholder = "Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="name" placeholder = "Name"><br>
        <?php } ?>

        <label>User Name</label>
        <?php if(isset($_GET['username'])) { ?>
           <input type="text" name="username" placeholder = "User Name" value="<?php echo $_GET['username']; ?>"><br>
        <?php } else { ?>
            <input type="text" name="username" placeholder = "User Name"><br>
        <?php } ?>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Retype Password</label>
        <input type="password" name="repeat_password" placeholder="Password"><br>

        <button type="submit">Sign Up</button>
        <a class="acc" href="loginpage.php" >Already have an account</a>
    </form>
</body>
</html>