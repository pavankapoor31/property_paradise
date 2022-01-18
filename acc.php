<?php
require 'connection.php';
require 'logged.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Montserrat:wght@600&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Dancing+Script:wght@500&family=Montserrat:wght@600&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Property paradise 🏠</title>
</head>

<body>
    <?php include'loggedHeader.php' ?>
<div class="top">
    <div class="top-quote">
    <h4 class="head-quote">" The house you looked at today and wanted to think about until tomorrow may be the same house someone looked at yesterday and will buy today. "</h4>
    <h6 class="head-writer">-Koki Adasi</h6>
    </div>
<div class="container content-box">
    <div class="top">
        <h1 class="heading-1">About Property Paradise</h1>
        <p class="para-content">Property Paradise is an end to end property management company providing comprehensive services non-residents Indians in Ahmedabad, Bengaluru, Chennai, Delhi NCR, Hyderabad, Kolkata, Mumbai and Pune. We provide you with a convenient and easy-to-use database management system where you can store details about the properties that you wish to buy, sell or rent. It organizes the data and provides the end users more access and control over the information. It is a more simple, efficient and detailed way to store data compared to the traditional method of maintaining records and paper-work. </p>
    </div>
    <div class="img-top">
        <img src="img/home.png" alt="" class="imp-top-img">
    </div>
    </div>
    </div>
    <!-- Bottom  -->

    <div class="bottom-half">
    <p class="bottom-head">Developers</p>

    <div class="bottom">

            <div class="box1 box">
                <div class="image">
                    <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/img/noel.png" alt="no img" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Noel George Thomas</div>
                        <div class="image_description">(1OX19IS067)</div>
                    </div>
                </div>
            </div>
            <div class="box1 box">
                <div class="image">
                    <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/img/SYEDA.jpg" alt="no img" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Syeda Noor Zaineb</div>
                        <div class="image_description">(1OX19IS104)</div>
                    </div>
                </div>
            </div>
            <div class="box1 box">
                <div class="image">
                    <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/img/PAVAN.jpg" alt="PAVAN KAPOOR" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Pavan Kapoor</div>
                        <div class="image_description">(1OX19IS070)</div>
                    </div>
                </div>
            </div>
            <div class="box1 box">
                <div class="image">
                    <img src="img/RISHABH.jpeg" alt="RISHABH SAHU" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Rishabh Sahu</div>
                        <div class="image_description">(1OX19IS080)</div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
       document.querySelector('.about').classList.add('active');
    </script>


</body>

</html>

<!-- About us
We provide you with a convenient and easy-to-use database management system where you can store details about the properties that you wish to buy, sell or rent. It organizes the data and provides the end users more access and control over the information. It is a more simple, efficient and detailed way to store data compared to the traditional method of maintaining records and paper-work. 
Developed by,
Pavan Kapoor(1OX19IS067), Rishabh Sahu(1OX19IS080), Noel George Thomas(1OX19IS065), Syeda Noor Zaineb(1OX19IS104) -->