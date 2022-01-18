   <!-- Header  -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand brand-name " href="welcome.php">
                Property Paradise
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-hover welcome" aria-current="page " href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover sell" href="sell.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover buy" href="buy.php">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover rent" href="rent.php">Rent</a>
                    </li>
                   
                    <li class="nav-item">
                        <div class="dropdown nav-drop ">
                            <button class="btn nav-color dropdown-toggle myAd" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Ads
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item nav-color" href="MyRentalAds.php">Rental</a>
                                <a class="dropdown-item nav-color" href="MySaleAds.php">Sale</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown nav-drop ">
                            <button class="btn nav-color dropdown-toggle reqP" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Requests
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item nav-color reqP" href="requestProperty.php">  Request</a>
                                <a class="dropdown-item nav-color" href="showRequests.php">Show Requests</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-hover about" href="acc.php">About us</a>
                    </li>
                    <li>
                        <!-- Logout modal -->
                        <button type="button" class="btn btn-danger right-btn">
                            <a href="logout.php" style="color:white;"> LOGOUT </a>
                        </button>
                    </li>
                    <li class="">
                        <a class="nav-link right-btn-2 nav-item-dark" href=""> Welcome,
                            <?php
                            // $id1 = $_SESSION['username'];
                            // echo "$id1";
                            // echo "</a>";
                            include 'getusername.php';
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 