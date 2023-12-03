<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amin login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary">
<div class="container">
        <div class="row">
            <div class="col md-6 shadow bg-white p-3 m-auto font-monospace border border-primary mt-3 ">


                <form action="adminlogin1.php" method="post" >
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-grey">login</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="userpassword" class="form-control" placeholder="Enter password">
                    </div>
                   
                    <button class="bg-black fs-4 fw-bold my-3 form-control">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>