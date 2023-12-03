<?php
include 'config1.php';
echo $Id = $_GET['id'];
mysqli_query($conn, "DELETE FROM `tblartwork` WHERE id = $Id");
header("location:product.php")


?>