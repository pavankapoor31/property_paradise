<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
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
    <title>Property paradise 🏠</title>
</head>

<body>
 <?php include'loggedHeader.php'; ?>
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

    <div class=" container ">
        <div class=" row ">
            <div class=" col-sm-6 ">
                <div class=" card ">
                    <div class=" card-body ">
                        <h5 class=" card-title ">Buy properties</h5>
                        <p class=" card-text ">Looking to buy a property? worry not! we got you covered.</p>
                        <a href="buy.php" class=" btn btn-primary btn-color ">Click here</a>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 ">
                <div class=" card ">
                    <div class=" card-body ">
                        <h5 class=" card-title ">Sell properties</h5>
                        <p class=" card-text ">Have a property to sell? Post an ad with us now and sell your property!</p>
                        <a href=" sell.php " class=" btn btn-primary btn-color ">Click here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" row ">
            <div class=" col-sm-6 margin-2 ">
                <div class=" card ">
                    <div class=" card-body ">
                        <h5 class="rent.html">Rent properties </h5>
                        <p class=" card-text ">Looking to rent a property? worry not! we got you covered.</p>
                        <a href="rent.php " class=" btn btn-primary btn-color ">Click here</a>
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 ">
                <div class=" card ">
                    <div class=" card-body ">
                        <h5 class=" card-title ">About Us</h5>
                        <p class=" card-text ">We are a real estate firm based in Bangalore.Click below to know more</p>
                        <a href="acc.php" class=" btn btn-primary btn-color ">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity=" sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin=" anonymous "></script>
    <script>
       document.querySelector('.welcome').classList.add('active');
    </script>

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
                            <input type="text" class="form-control" id="signup-fname" name="fname">
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
                        </div>
                        <div class="mb-3">
                            <label for="confirm-pass" class="form-label"> Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-pass" name="confirm_password">
                        </div>
                        <div class="mb-3">
                            <label for="user_type" class="form-label"> User Type</label>
                            <!-- <input type="text" class="form-control" id="user_type" placeholder="Buyer/Seller" name="user_type"> -->
                            <input type="radio" name="user_type" id="user_type" value="Buyer"> <label for="user_type">
                                Buyer</label>
                            <input type="radio" name="user_type" id="user_type1" value="Seller"><label for="user_type1">
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