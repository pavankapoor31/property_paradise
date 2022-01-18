<?php
require 'connection.php';
require 'logged.php';
include 'loggedHeader.php';
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
    <div class="container">
        <h2 class="heading-2 center mtop-10"> MY RENTAL ADS </h2>
        <center>
            <div class="container">
                <table class="table table-ligh">
                    <thead>
                        <tr>
                            
                            <th scope="col">BHK</th>
                            <th scope="col">BUILTUP AREA</th>
                            <th scope="col">CARPET AREA</th>
                            <th scope="col">LOCATION</th>
                            <th scope="col">CONTACT</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">POSTED BY</th>
                            <th scope="col">Delete AD</th>
                        </tr>
                        <br>
                    </thead>

                    <tbody>
                        <?php
                        $id = $_SESSION['username'];
                        $sql = "SELECT * FROM rent where username='$id'";
                        $result = $conn->query($sql);
                        // echo"Sale ads";
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>" . "<td>" . $row["BHK"] . "</td>" . "<td>" . $row["BUA"] . "</td>" . "<td> " . $row["CA"] . "</td>" . "<td>" . $row["LOC"] . "</td>" . "<td>" . $row["NUMB"] . "</td><td>" . $row["PRICE"] . "</td>" . "<td>" . $row["P_DESC"] .  "</td>" . "<td>" . $row["username"] . "</td>" . "<td>" . "<form action='deleteRentalAd.php' method='post'><input name='id' type='hidden' value='" . $row["id"] . "'> <button type='submit' class='btn btn-danger x3'>Delete</button></form>" . "</td>" .
                                    "</tr>";
                            }
                        } else {
                            echo " NO RENTAL PROPERTIES POSTED BY YOU";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </center>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity=" sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin=" anonymous "></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.myAd').classList.add('active');
    </script>
    
</body>

</html>