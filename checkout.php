<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
<nav class="navbar"></nav>
    <div class="nav ">
        <img src="logo.png" height="100px" weight="100px"  class="brand-logo" >
        <div class="nav-items justify-content-center">
        <ul class="links-container">
        <li class="link-item"><a href="index.php" class="link">home</a></li>
    <div class="alert-box">
        
        <p class="alert-msg"></p>
</div>
<div class="form">
    <h1 class="heading">checkout</h1>
    <p class="text" >delivery Info</p>
    <form id="contact-form" method="post" role="form">

<div class="messages"></div>

<div class="controls">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="form_phone">Phone</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                <div class="help-block with-errors"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="form_message">Address *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Address for delivery *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" name="ok" class="btn btn-success btn-send" value="Send">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>
    </div>
</div>

</form>
<?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                
            }
            ?>

</div>

</div> 

</div>

</div> 
</body>
</html>