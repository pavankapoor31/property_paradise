<?php
include 'connection.php';
require 'logged.php';
if (isset($_POST['s_bhk'])) {
    $sell_id = $_SESSION['username'];
    $bhk = $_POST['s_bhk'];
    $bua = $_POST['s_bua'];
    $ca = $_POST['s_ca'];
    $loc = $_POST['s_loc'];
    $cn = $_POST['s_cn'];
    $desc = $_POST['s_desc'];
    $price = $_POST['price'];
    $ad_type = $_POST['ad_type'];
    if (!is_numeric($bhk) || !is_numeric($bua) || !is_numeric($ca)) {
        echo "<script> alert('BHK,Area can be numeric only')</script>;";
    } else
    if (!is_numeric($cn)) {
        echo "<script> alert('Invalid contact number');</script>";
    } else
    if (!(strlen((string)$cn) == 10)) {
        echo "<script> alert('Contact number has to be 10 digits');</script>";
    } else {
        if ($ad_type == "1") {
            $sql = "INSERT INTO `sell` VALUES ('$bhk', '$bua', '$ca', '$loc', '$cn', $price, '$desc','$sell_id',NULL);";
        } else
            $sql = "INSERT INTO `rent` VALUES ('$bhk', '$bua', '$ca', '$loc', '$cn',$price, '$desc','$sell_id',NULL);";
        if ($conn->query($sql) === TRUE) {
            echo ("<script> alert('Submitted');</script>");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    $conn->close();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Property paradise 🏠</title>
</head>

<body>
    <!-- Header  -->
    <?php include 'loggedHeader.php'; ?>
    <div class="container">
        <h2 class="heading-2 center "> SELL/RENT PROPERTIES</h2>
    </div>
    <div class="container">
        <center>
            <form action="" method="POST">
                <div class="form-box" id="sell_form">
                    <label for="bhk"><strong> BHK: </strong></label><br>
                    <input type="text" class="input-box x3" id="bhk" name="s_bhk"> <br>
                    <label for="b_area"><strong> Built Up area: </strong> </label><br>
                    <input type="text" class="input-box x3" id="b_area" name="s_bua"> <br>
                    <label for="c_area"> <strong> Carpet area: </strong> </label> <br>
                    <input type="text" class="input-box x3" id="c_area" name="s_ca"> <br>
                    <label for="loc"> <strong> Location: </strong></label> <br>
                    <input type="text" class="input-box x3" id="loc" name="s_loc"> <br>
                    <label for="c_num"> <strong> Contact Number: </strong> </label><br>
                    <input type="text" class="input-box x3" id="c_num" name="s_cn"> <br>
                    <label for="price"> <strong> Price </strong></label><br>
                    <input type="text" class="input-box x3" id="price" name="price"> <br>
                    <label for="ad_type"> <strong> Ad Type: </strong> </label><br>
                    <!-- <input type="text" class="input-box" id="ad_type" name="ad_type" placeholder="rent/sell" default="sell"> <br> -->
                    <input type="radio" name="ad_type" id="ad_type" value="0" checked> <label for="ad_type">Rent</label>
                    <input type="radio" name="ad_type" id="ad_type1" value="1"> <label for="ad_type1">Sell</label> <br>
                    <label for="desc"> <strong> Description: </strong> </label><br>
                    <input type="text" class="input-box x3" id="desc" name="s_desc"> <br> <br>
                    <button type="submit" class="btn btn-primary x3">SUBMIT</button>
                </div>
            </form>
        </center>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity=" sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin=" anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.sell').classList.add('active');
    </script>
</body>

</html>