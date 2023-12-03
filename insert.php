<?php



if(isset($_POST['submit'])){

    include 'config1.php';
    $artwork_name = $_POST['Aname'];
    $artwork_prize = $_POST['Aprize'];
    $artwork_image = $_FILES['Aimage'];
    $image_loc = $_FILES['Aimage']['tmp_name'];
    $image_name = $_FILES['Aimage']['name'];
    $img_des = "uploadimage/".$image_name;
    move_uploaded_file($image_loc, "uploadimage/".$image_name);

    $artwork_category = $_POST['Pages'];


    mysqli_query($conn, "INSERT INTO `tblartwork`( `Aname`, `Aprize`, `Aimage`, `ACategory`)
     VALUES ('$artwork_name','$artwork_prize','$img_des',' $artwork_category') ");

}


       


?>
<table class="table table-hover">
