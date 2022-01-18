<?php
$servername='localhost';
$username='root';
$password='';
$dbName='abcd';
$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error)
{
    die("connection error");
}
else
{
    // echo"Connection successful";
}
