<?php
require('connection.php');
require('logged.php');

if (isset($_POST['requestBtn'])) {
    $type = $_POST['type'];
    $size = $_POST['size'];
    $prize = $_POST['prize'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $query = 'INSERT INTO request(BHK,SIZE,PRICE,CONTACT,ADDRESS) VALUES ("' . $type . '","' . $size . '","' . $prize . '","' . $contact . '","' . $address . '");';
//    $sql= INSERT INTO `request` (`ID`, `BHK`, `SIZE`, `PRICE`, `CONTACT`, `ADDRESS`) VALUES (NULL, '2', '2000', '2000', '$contact', '$address');

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Request Added");</script>'; // when sign up is successfull
    } else {
        echo '<script>alert("Request UNsuccessfull");</script>';
        // echo '<script>document.getElementById("signuperror").style.visibility="visible";</script>'; //this will display error
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .form-hint {
            visibility: hidden;
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include('loggedHeader.php');
    ?>
    <CENTER>

        <div class="col-lg-5 border p-2 p-sm-2 bgGradient">
            <div class="container-fluid p-lg-3 center">
                <h1 class="mt-lg-0 m-3 heading-2 text-uppercase ">Request Apartment</h1>
                <form action="" method="POST">
                    <div class="form-group signupText">
                        <label for="type">BHK</label>
                        <select class="form-control signupText  " id="type" name="type">
                            <option value="1" class="center">1 BHK</option>
                            <option value="2" class="center">2 BHK</option>
                            <option value="3" class="center">3 BHK</option>
                            <option value="4" class="center">4 BHK</option>
                            <option value="5" class="center">5 BHK</option>
                        </select>
                        <small id="typeerror" class="form-hint text-danger">
                            Type not valid
                        </small>
                    </div>
                    <div class="form-group signupText">
                        <label for="size">Size</label>
                        <input type="text" class="form-control" id="size" name="size" onkeyup="hideNext(this)">
                        <small id="sizeerror" class="form-hint text-danger">
                            Must be 3 characters long.
                        </small>
                    </div>
                    <div class="form-group signupText">
                        <label for="prize">Price</label>
                        <input type="text" class="form-control" id="prize" name="prize" onkeyup="hideNext(this)">
                        <small id="prizeerror" class="form-hint text-danger">
                            Must be 3 digit or more long.
                        </small>
                    </div>
                    <div class="form-group signupText">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" onkeyup="hideNext(this)">
                        <small id="contacterror" class="form-hint text-danger">
                            Must be 10 digit long.
                        </small>
                    </div>
                    <div class="form-group signupText">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" onkeyup="hideNext(this)">
                        <small id="addresserror" class="form-hint text-danger">
                            Must be 8 characters or more long.
                        </small>
                    </div>
                    <input type="submit" class="btn btn-success" id="requestBtn" name="requestBtn" value="Request" onclick="return formValidation()">
                </form>
                
                
            </div>
        </div>
    </CENTER>
    </div>
    
    <script type="text/javascript" src="js/appart.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.reqP').classList.add('active');
    </script>
</body>

</html>