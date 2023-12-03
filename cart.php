<?php
session_start();


$artwork_name = $_POST['Aname'];
$artwork_prize = $_POST['Aprize'];

 /*if(isset($_POST['addCart'])){

    $check_artwork = ($_SESSION['cart'] ) ('artworkname' => $artwork_name, 
    'artworkprize' => $artwork_prize ));
    if(in_array( $artwork_name,$check_artwork )){
        echo "
        
        <script>
        alert('artwork already added');
        window.location.href = 'index.php';
        </script>
        
        
        ";
    }
    else{
    }*/
        
        $_SESSION['cart'][] = array('artworkname' => $artwork_name, 
                              'artworkprize' => $artwork_prize );
        
                                 header("location:viewcart.php");


    





     // remove artwork
     if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key => $value){
             if($value['artworkname'] === $_POST['item']){
                 unset($_SESSION['cart'][$key]);
                 $_SESSION['cart'] = array_values($_SESSION['cart']);
                 header('location:viewcart.php');
             }
         }
     }
       
?>