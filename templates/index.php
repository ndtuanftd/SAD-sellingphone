<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All phones</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/index.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


    <!--  -->
    <link rel="stylesheet" href="../static/styles.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1D2128FF;">
    <?php
        if (isset($_GET["page"]) && $_GET["page"] == "manage"){
            echo "<a class='navbar-brand' href='admin-index.php'><img src='../media/logo-header-main_07.png' alt='logo'></a>";
        }
        else{
            echo "<a class='navbar-brand' href='index.php'><img src='../media/logo-header-main_07.png' alt='logo'></a>";
        }
    ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <div class="header-content">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class='nav-link' href='index.php?page=home'>
                        <center><i class='fas fa-mobile'></i>
                            All phones
                        </center>
                    </a>
                    </li>
                    <li class="nav-item">
                        <?php
                            session_start();
                            if (isset($_SESSION["cookie_name"]) && $_SESSION["cookie_name"] == "admin"){
                                echo "
                                <a class='nav-link' href='index.php?page=admin-manageUser'>
                                    <center><i class='fas fa-mobile'></i>
                                        View users
                                    </center>
                                </a>";
                            }
                            else{
                                echo "
                                <a class='nav-link' href='index.php?page=cart'>
                                    <center><i class='fas fa-mobile'></i>
                                        View cart
                                    </center>
                                </a>";
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                            if (isset($_SESSION["cookie_name"]) && $_SESSION["cookie_name"] == "admin"){
                                echo "
                                <a class='nav-link' href='index.php?page=admin-addProduct'>
                                    <center><i class='fas fa-mobile'></i>
                                        Add products
                                    </center>
                                </a>";
                            }
                            else{
                                echo "";
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="navbar-nav ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg avatar justify-content-center"
                            style=" display: flex; color: #ffffff; width: 40; height: 40;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="login.php">Log in</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                        <a class="dropdown-item">
                            <form method='post' action='logout.php'>
                                <input type='submit' name='logout' value='Log out'/>
                            </form>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <?php 
        if (!isset($_GET["page"])){
            include "home.php";
        }
        else{
            if ($_GET["page"] == "home"){
                include "home.php";
            }
            elseif ($_GET["page"] == "cart"){
                include "cart.php";
            }
            elseif ($_GET["page"] == "payment"){
                include "payment.php";
            }
            elseif ($_GET["page"] == "congrat"){
                include "congrat.php";
            }
            elseif ($_GET["page"] == "productDetail"){
                include "productDetail.php";
            }
            elseif ($_GET["page"] == "admin-manageUser"){
                include "admin-manageUser.php";
            }
            elseif ($_GET["page"] == "admin-addProduct"){
                include "admin-addProduct.php";
            }
            elseif ($_GET["page"] == "admin-productDetail"){
                include "admin-productDetail.php";
            }
            elseif ($_GET["page"] == "admin-purchaseDetail"){
                include "admin-purchaseDetail.php";
            }
        }
    ?>
    <!-- footer -->
    <footer class="footer-container">
        <div class="row align-items-center py-4">
            <div class="col-4"></div>
            <div class="col-2">
                <img class="footer-logo" src="../media/Logo_07.svg" alt="logo">
            </div>
            <div class="col-6">
                <p class="about-text">About Us</p>
                <p class="address-text">Address: 268 Ly Thuong Kiet, Ward 14, District 10, HCM City <br> Tel:
                    0999888777
                </p>

            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: #e4e4e4;">
            © 2022 Copyright:
            <a class="text-dark" href="#">HCMUT</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>