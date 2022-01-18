<?php

require 'connection.php';
$id= $_SESSION['username'];
$sql = "SELECT * FROM user_details WHERE username='$id'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc())
$fname=$row["fname"];
echo"$fname";
?>