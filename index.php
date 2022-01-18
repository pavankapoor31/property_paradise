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
    <!-- Header  -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand brand-name index-brand " href="#">
                    Property Paradise
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark right-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                                LOGIN
                            </button>
                            <button type="submit" class="btn btn-light .btn-color right-btn-2" data-bs-toggle="modal" data-bs-target="#signUpModal">
                                SIGNUP</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- corousel -->
    <div class="container">
        <div class="corousel-container carousel-container">
            <div id="carouselExampleCaptions" class="carousel slide my-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/banner_1_600_120.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h2>Welcome to Property paradise</h2>
                            <p>Making property dreams come true!</p>
                            <a href="https://github.com/pavankapoor31/property_paradise" target=" _blank "> <button class=" btn btn-dark btn-sm ">
                                    Github </button></a>

                        </div>
                    </div>
                    <div class=" carousel-item ">
                        <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/banner_2_600_120.jpg" class=" d-block w-100 " alt=" ... ">
                        <div class=" carousel-caption d-none d-md-block ">
                            <h2>Welcome to Property paradise</h2>
                            <p>For the home you always wanted</p>
                            <a href="https://github.com/pavankapoor31/property_paradise" target=" _blank "> <button class=" btn btn-dark btn-sm "> Github </button></a>
                        </div>
                    </div>
                    <div class=" carousel-item ">
                        <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/banner_3_600_120.png" class=" d-block w-100 " alt=" ... ">
                        <div class=" carousel-caption d-none d-md-block ">
                            <h2>Welcome to Property paradise</h2>
                            <p>Making property dreams come true!</p>
                            <a href="https://github.com/pavankapoor31/property_paradise" target=" _blank "> <button class=" btn btn-dark btn-sm "> Github </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity=" sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin=" anonymous "></script>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form" action="login.php" method="post">
                        <div class="mb-3">
                            <label for="login_email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="login_email" name="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="top-quote">
            <h4 class="head-quote index-head-quote">" The house you looked at today and wanted to think about until tomorrow may be the same house someone looked at yesterday and will buy today. "</h4>
            <h6 class="head-writer">-Koki Adasi</h6>
        </div>
        <div class="container content-box">
            <div>
                <h1 class="heading-1">About Property Paradise</h1>
                <p class="para-content">Property Paradise is an end to end property management company providing comprehensive services non-residents Indians in Ahmedabad, Bengaluru, Chennai, Delhi NCR, Hyderabad, Kolkata, Mumbai and Pune. We provide you with a convenient and easy-to-use database management system where you can store details about the properties that you wish to buy, sell or rent. It organizes the data and provides the end users more access and control over the information. It is a more simple, efficient and detailed way to store data compared to the traditional method of maintaining records and paper-work. </p>
            </div>
            <div class="img-top">
                <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/img/home.png" alt="" class="imp-top-img">
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
                    <img src="https://raw.githubusercontent.com/pavankapoor31/property_paradise/main/img/PAVAN.jpg" alt="no img" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Pavan Kapoor</div>
                        <div class="image_description">(1OX19IS070)</div>
                    </div>
                </div>
            </div>
            <div class="box1 box">
                <div class="image">
                    <img src="img/RISHABH.jpeg" alt="no img" class="box-img box1-img">
                    <div class="image_overlay">
                        <div class="image_title">Rishabh Sahu</div>
                        <div class="image_description">(1OX19IS080)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SIGNUP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="register.php" method="post">
                        <div class="mb-3">
                            <label for="signup-fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="signup-fname" name="fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="signup-lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="signup-lname" name="lname">
                        </div>
                        <div class="mb-3">
                            <label for="signup_email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="signup_email" aria-describedby="emailHelp" name="username" placeholder="example@example.com">
                            <div id="emailHelp" class="form-text">We'll never share your email with
                                anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="signup_pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="signup_pass" name="password">
                            <div id="emailHelp" class="form-text">Minimum six digits</div>
                        </div>

                        <div class="mb-3">
                            <label for="confirm-pass" class="form-label"> Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-pass" name="confirm_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="user_type" class="form-label"> User Type</label>
                            <!-- <input type="text" class="form-control" id="user_type" placeholder="Buyer/Seller" name="user_type"> -->
                            <input type="radio" name="user_type" id="user_type" value="buyer" checked> <label for="user_type">
                                Buyer</label>
                            <input type="radio" name="user_type" id="user_type1" value="seller"><label for="user_type1">
                                Seller</label>
                        </div>
                        <button type="submit" class="btn btn-primary">SIGNUP</button>

                    </form>
                </div>
                <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->
            </div>
        </div>
    </div>
</body>

</html>
<?php
// echo "<script> alert('Please login') </script>";
?>