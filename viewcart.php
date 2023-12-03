<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="viewcart.css">

</head>
<body>
<nav class="navbar"></nav>
    <div class="nav ">
        <img src="logo.png" height="100px" weight="100px"  class="brand-logo" >
        <div class="nav-items justify-content-center">
        <ul class="links-container"> 
        <li class="link-item"><a href="index.php" class="link">home</a></li>
        <li class="link-item"><a href="Sketches.php" class="link">artworks</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-12">
                <table class="table table-bordered tect-center">
                <thead class="bg-dark text-white">
                    <th>Serial no</th>
                    <th>Artwork name</th>
                    <th>Artwork prize</th>
                    <th>Total</th>
                    <th>Delete</th>
                </thead>

                <tbody>
   
                    <?php
                    session_start();
                    
                    $ptotal = 0;
                    $total = 0;
                    $i = 0;
                    


                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value){
                            $ptotal = $value['artworkprize'];
                            $total += $value['artworkprize']; $ptotal = $value['artworkprize'];
                            $i = $key +1;
                            
                            echo "
                            <form action = 'cart.php' method ='POST'>
                            <tr>
                            <td>$i</td>
                            <td> <input type = 'hidden' name = 'Aname' value = '$value[artworkname]'>$value[artworkname]</td>
                            <td> <input type = 'hidden' name = 'Aprize' value = '$value[artworkprize]'>$value[artworkprize]</td>
                            <td> $ptotal </td>
                            <td><button name = 'remove' class= 'btn-danger'>Delete</button></td>
                            <td><input type = 'hidden' name = 'item' value = '$value[artworkname]' ></td>
                            </tr>
                            </form>
                            ";
                        }                    
                    }



?>
                </tbody>
            </table>
            
        </div>
        <div class="col-lg-3 text-center ">
            <h3>TOTAL</h3>
            <h1 class="bg-dark text-white">
                <?php
                echo number_format($total,2) 

                ?>
            </h1>
        </div>
       <div class="checkout-section">
           <div class="checkout-box">
               <p class="text">your total bill</p>
               <h1 class="bill"> <?php
                echo number_format($total,2) 

                ?></h1>
               <a href="checkout.php" class="checkout-btn">checkout</a>
            </div>
        </div>
                
</body>
</html>