<?php
require('connection.php');
require('logged.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Request</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'loggedHeader.php'; ?>
    <div class="text-center">
        <h2 class="heading-2 center">USER REQUESTS</h2>
    </div>
    <div class="container">
        <div class="row p-3 shadow">
            <!-- WRITE HERE -->
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'SELECT * FROM `request` WHERE 1';
                    $result = $conn->query($sql);
                    $pr = '';

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $pr .= '<tr>';
                            $pr .= '<td>' . $row['BHK'] . '</td>' . '<td>' . $row['SIZE'] . '</td>' . '<td>' . $row['CONTACT'] . '</td>' . '<td>' . $row['ADDRESS'] . '</td>' . '<td>' . $row['PRICE'] . '</td>';
                            $pr .= '</tr>';
                        }
                        echo $pr;
                    }


                    ?>
                </tbody>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.reqP').classList.add('active');
    </script>
</body>
</html>