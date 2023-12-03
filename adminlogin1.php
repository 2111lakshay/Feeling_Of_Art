<?php

$conn = mysqli_connect('localhost','root','','My website');

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

$result = mysqli_query($conn, "SELECT * FROM `admin` WHERE username = '$A_name' AND userpassword = '$A_password' ");

session_start();


if(mysqli_num_rows($result)){

    $_SESSION['admin'] = $A_name ;


    echo "
        <script>
        alert('Login successfully');
        window.location.href='admin.php';
        </script>
    ";
}
else{
    echo "
    <script>
    alert('Invalid username/password');
    window.location.href='adminlogin.php';
    </script>
";

}
?>