<?php
require 'connection.php';
require 'logged.php';
$id= $_POST['id'];
$sql="DELETE FROM sell where id=$id";
if($conn->query($sql))
{
    echo"<script>alert('deleted successfully')</script>";
    header('location:MySaleAds.php');
}
else {
    echo"<script>alert('failed')</script>";
    include 'MySaleAds.php';
} 
?>

