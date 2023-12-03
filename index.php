<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feeling of ART</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
</head>
<body>
    <?php
    
    
    $count = 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);

    
    }


?>
    <nav class="navbar"></nav>
    <div class="nav">
        <img src="logo.png" height="100px" weight="100px"  class="brand-logo" >
        <div class="nav-items">
        <ul class="links-container">
        <li class="link-item"><a href="index.php" class="link">home</a></li>
        <li class="link-item"><a href="Sketches.php" class="link">artworks</a></li>
        </ul>
         <a class="nav-link"><?php echo "Welcome ". $_SESSION['username']?></a>
            <a class="nav-link" href="logout.php">Logout</a>
            <a href="viewcart.php"> <img src="cart.png">(<?php echo $count ?>)</a>
            <a href="admin.php"> <img src="user.png"></a>
    </div>
   
    <header class="hero-section">
        <div class="content">
            <img src="logo.png" class="logo">
            <p class="sub-heading">Best Art Works Collection </P>
        </div>
</div>
<div>
    </header>
    <section id="about" class="about">
        <div class="container flex items-center">
            <div class="left flex-1 flex justify-center">
                <img src="My pic.jpg" height="400" width="400">
            </div>
            <div class="flex-1">
                <h1>About <span>Me</span></h1>
                 <h3> Hello Im Lakshay Jatawat</h3>
                 <p>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                     Odio autem reiciendis distinctio illum accusamus quas atque 
                     est saepe ullam dolorem aperiam a adipisci ducimus ea similique 
                     fugiat, labore repellat obcaecati. Lorem ipsum, dolor sit amet
                     consectetur adipisicing elit. Iure et quidem, accusantium saepe
                     fugiat voluptate, optio nisi nesciunt nostrum itaque quia qui 
                     inventore rerum consequuntur tenetur necessitatibus laborum exercitationem
                     reiciendis.
                 </p>
               
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="col-md-10">
        <div class="row">
    <h1 class="text-secondary font-monospace text-center my-5">My Works</h1>
    <section class="product">
        <div class="product-container">
        <div class="product-card">
                <div class="product-image">
                    <img src="sketch.jpg" class="product-thumb">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Dil Bechara</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="paint-1.jpg" class="product-thumb">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Horse Painting</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="creative-1.jpg" class="product-thumb">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Liquid cube</h2>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="pen-1.jpg" class="product-thumb">
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Eyes</h2>
                </div>
            </div>
        </div>
    </section>
   
    </div>
</div>
</div>
</div>

   
    <footer></footer>
    
    <script src="home.js"></script>
    <script src="footer.js"></script>
</div>
  
    
  
        

    
</body>
</html>