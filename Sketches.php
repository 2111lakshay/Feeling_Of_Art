<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artworks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sketches.css">
</head>
<body>
<?php
    session_start();
    $count = 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);

    
    }


?>
    
    <nav class="navbar"></nav>
    <div class="nav">
        <img src="logo.png" height="100px" weight="100px"  class="brand-logo" >
        <div class="nav-items">
           
        <a href="viewcart.php"> <img src="cart.png">(<?php echo $count ?>)</a>
        </div>
    </div>
    <ul class="links-container">
        <li class="link-item"><a href="index.php" class="link"><h2>home</h2></a></li>
       
       
    </ul>
    <div class="container-fluid">
        <div class="col-md-10">
        <div class="row">
    <h1 class="text-secondary font-monospace text-center my-3">Sketches</h1>
    <?php
    include 'config2.php';
    $Record = mysqli_query($conn, "SELECT * FROM `tblartwork`" );
      while(  $row = mysqli_fetch_array($Record)){
       
       
      

        echo "
        <div class='col-3 col-lg-3 col-lg-s-4 mb-3 '>
        <form action='cart.php' method='POST'>
        <div class='card m-auto' style='width: 18rem;'>
        <img src='$row[Aimage]' class='card-img-top' alt='...'>
        <div class='card-body text-center '>
          <h5 class='card-title text-secondary fs-4 fw-bold'>$row[Aname]</h5>
          <p class='card-text text-secondary fs-4 fw-bold'>$row[Aprize]</p>
          <input type='hidden' name='Aname' value = '$row[Aname]'>
          <input type='hidden' name='Aprize' value = '$row[Aprize]'>
          <input type='submit' name='addCart' class = 'btn btn-grey text-secondary w-100' value = 'Add to Cart' > 
        
        </div>
      </div>
      </form>
      </div>
      ";
      }
    
    
    
      
?>

    

    
    </div>
</div>
</div>
   
   
    <footer></footer>
    
    <script src="footer.js"></script>
</body>
</html>