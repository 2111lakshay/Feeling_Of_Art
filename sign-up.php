<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>



 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="alert-box ">
        <img src="error.png" class="alert-img">
        <p class="alert-msg">Error message</p>
    </div>
    <div class="container">
        <img src="logo.png" class="logo">
        <form action="" method="post">
        <div>
            <input type="text" id="username" name="username" placeholder="username">
            <input type="email" id="email" placeholder="email">
            <input type="text" id="number" placeholder="number">
            <input type="password" id="password" name="password" placeholder="password">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password">
            <input type="checkbox" checked class="checkbox" id="terms-and-cond">
            <label for="terms-and-cond">agree to our <a href="">terms-and-cond</a></label>
            <br>
            <input type="checkbox" class="checkbox" id="notifications">
            <label for="notifications">receive upcoming offers and mails <a href="">notifications</a></label>
            <button class="submit-btn">create account</button>
        </div>
        </form>
        <a href="login.php" class="link">already have an account? Log in here</a>
    </div>
    <script src="form.js"></script>
  
    
</body>
</html>

