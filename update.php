<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add artwork</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php

$id = $_GET['id'];
include 'config1.php';
$Record = mysqli_query($conn , "SELECT * FROM `tblartwork` WHERE id = $id ");
$data = mysqli_fetch_array($Record);



?> 

    <div class="container">
        <div class="row">
            <div class="col md-6 shadow bg-white p-3 m-auto border border-primary mt-3 ">


                <form action="update.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-grey">Artwork Update</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artwork Name</label>
                        <input type="text" value ="<?php echo $data['Aname'] ?>" name="Aname" class="form-control" placeholder="Enter Artwork Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artwork Prize</label>
                        <input type="text" value ="<?php echo $data['Aprize'] ?>"  name="Aprize" class="form-control" placeholder="Enter Artwork Prize">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Artwork Image</label>
                        <input type="file" name="Aimage"class="form-control"><br>
                        <img src ="<?php echo $data['Aimage'] ?>" height=100px >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select page category </label>
                        <select class="form-select" name="Pages"> 
                            <option value="index">index</option>
                            <option value="sketches">sketches</option>
                            <option value="painting">painting</option>
                            <option value="creative">creative</option>
                            <option value="pen">pen</option>
                          </select>
                    </div>
                    <input type ="hidden"  name ="id" value = "<?php echo $data['id'] ?>">
                    <button name="submit" class="bg-dark text-white fs-4 fw-bold my-3 form-control">Update</button>
                </form>
                
            </div>
        </div>
    </div>

    
    <?php
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $artwork_name = $_POST['Aname'];
        $artwork_prize = $_POST['Aprize'];
        $artwork_image = $_FILES['Aimage'];
        $image_loc = $_FILES['Aimage']['tmp_name'];
        $image_name = $_FILES['Aimage']['name'];
        $img_des = "uploadimage/".$image_name;
        move_uploaded_file($image_loc, "uploadimage/".$image_name);
    
        $artwork_category = $_POST['Pages'];

        include 'config1.php';
        mysqli_query($conn, "UPDATE `tblartwork` SET `Aname`='$artwork_name',`Aprize`='$artwork_prize',
        `Aimage`='$img_des',`ACategory`='$artwork_category' WHERE id = $id ");
        header("location:product.php");
    

 }


?>









</body>

</html>



<!--<?php

 $id = $_GET['id']


?> --->