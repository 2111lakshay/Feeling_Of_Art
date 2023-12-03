<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="utilities.">
</head>
<?php
session_start();
if( !$_SESSION['admin']){
    header("location:adminlogin.php");
}


?>

<body>
    
    <nav class="navbar"></nav>
    <div class="nav">
        <img src="logo.png" height="100px" weight="100px"  class="brand-logo" >
        <div class="nav-items">
            <i class="fas fa-user-shield"></i>
            Hello,<?php echo $_SESSION['admin'];?>

            
           <a class="nav-1" href="adminlogout.php">Logout</a>
        </div>
    </div>

    <div>
        <center><h2>DASHBOARD</h2></center>
    </div>
    <div class="right">
        <center> 
           <button class="btn btn-primary"> <a href="product.php">Add artwork</a></button> 
        </center>
    </div>
  
    
</body>
</html>