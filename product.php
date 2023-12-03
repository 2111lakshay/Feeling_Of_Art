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

    <div class="container">
        <div class="row">
            <div class="col md-6 shadow bg-white p-3 m-auto border border-primary mt-3 ">


                <form action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-grey">Artwork details</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artwork Name</label>
                        <input type="text" name="Aname" class="form-control" placeholder="Enter Artwork Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artwork Prize</label>
                        <input type="text" name="Aprize" class="form-control" placeholder="Enter Artwork Prize">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Artwork Image</label>
                        <input type="file" name="Aimage"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select page category </label>
                        <select class="form-select" name="Pages"> 
                            
                            <option value="sketches">artworks</option>
                           
                          </select>
                    </div>
                    <button name="submit" class="bg-black fs-4 fw-bold my-3 form-control">Upload</button>
                </form>
                
            </div>
        </div>
    </div>







    <div class="contaoner ">
        <div class="row">
            <div class="col-md-8  m-auto">

           
    <table class="table  border border-black table-hover border my-5">
        <thead class="bg-dark text-white fs-5 font-monospace text-center">
        <th>Id</th>
        <th>Name</th>
        <th>Prize</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
        <th>Update</th>
        </thead>

        
       

        <tbody class="text-center">
            <?php
            include 'config1.php';
            $Record = mysqli_query($conn, "SELECT * FROM `tblartwork`" );

            while ($row = mysqli_fetch_array($Record))
            echo"


            <tr>
            <td>$row[id]</td>
            <td>$row[Aname]</td>
            <td>$row[Aprize]</td>
            <td><img src='$row[Aimage]' height='200px' width='200px'></td>
            <td>$row[ACategory]</td>
            <td><a href='delete.php? id= $row[id]' class = 'btn btn-danger'>Delete</a></td>
            <td><a href='update.php? id= $row[id]' class = 'btn btn-warning'>Update</a></td>
            </tr>



            "

            ?>
             
        </tbody>
    </table>
    </div>
        </div>
    </div>


</body>

</html>
