<?php
require 'connection.php';
require 'logged.php';
$id= $_POST['id'];
$sql="DELETE FROM rent where id=$id";
if($conn->query($sql))
{
    echo"<script>alert('deleted successfully')</script>";
    header('location:MyRentalAds.php');
}
else {
    echo"<script>alert('failed')</script>";
    include 'MyRentalAds.php';
} 
?>