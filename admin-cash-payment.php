<?php
require "auth-checker.php";
if(!isset($_SESSION["reservation"])) {
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Cash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/download.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>

<!--====== LOADER =====-->
<div class="loader"></div>


<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
    <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
    <div class="overlay-content">
        <div class="form-center">
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." required />
                        <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                    </div><!-- end input-group -->
                </div><!-- end form-group -->
            </form>
        </div><!-- end form-center -->
    </div><!-- end overlay-content -->
</div><!-- end overlay -->


<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>Burgos St. La Paz, Iloilo City Philippines 5000</li>
                        <li><span><i class="fa fa-phone"></i></span>(033) 320-7190</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <?php
                        if(isset($_SESSION["user_id"])) {
                            ?>
                            <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                            <?php
                        }
                        else {
                            ?>
                            <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <?php
                        }
                        ?>
                        <li>
                        </li>
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="header-search hidden-lg">
                <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div>
            <img src="images/logo.png" class="img-responsive" alt="registration-img">
            <!--<a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>-->
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Hotel Homepage</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="hotel-hrsc.php">HRTSC</a></li>
                        <li><a href="hotel-tlsc.php">TLSC</a></li>
                    </ul>
                </li>

                <li class="text ">
                    <a href="inquiry-client.php">About us</a>
                </li>

                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >..
        <img src="images/logo.png" class="img-responsive" alt="registration-img">
        <!--<h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2>-->

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">

                <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="home-links">
                    <a href="index.php" class="list-group-item">Hotel Homepage</a>
                </div><!-- end sub-menu -->

                <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="hotels-links">
                    <a href="hotel-hrsc.php" class="list-group-item">HRTSC</a>
                    <a href="hotel-tlsc.php" class="list-group-item">TLSC</a>
                </div><!-- end sub-menu -->

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-thank-you">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Let's finalize your information and payment</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Finalize</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--==== INNERPAGE-WRAPPER =====-->
<section class="innerpage-wrapper">
    <div id="thank-you" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="space-right">

                        <div class="traveler-info">
                            <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Traveler Information</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>First Name:</td>
                                        <td><?= $_SESSION["reservation"][6]?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td><?= $_SESSION["reservation"][7]?></td>
                                    </tr>
                                    <tr>
                                        <td>Email Address:</td>
                                        <td><?= $_SESSION["reservation"][8]?></td>
                                    </tr>
                                    <tr>
                                        <td>Home Address:</td>
                                        <td><?= $_SESSION["reservation"][10]?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td><?= $_SESSION["reservation"][9]?></td>
                                    </tr>
                                    <tr>
                                        <td>Check In:</td>
                                        <td><?= date('M d Y',strtotime($_SESSION["reservation"][0])) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Check Out:</td>
                                        <td><?= date('M d Y',strtotime($_SESSION["reservation"][1])) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Room:</td>
                                        <td><?= $_SESSION["reservation"][5]->room_name.' '.$_SESSION["reservation"][5]->room_description ?></td>
                                    </tr>
                                    <tr>
                                        <td>Number of Adult: </td>
                                        <td><?= $_SESSION["reservation"][2] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Number of Child:</td>
                                        <td><?= $_SESSION["reservation"][3]?></td>
                                    </tr>
                                    <tr>
                                        <td>Total Price:</td>
                                        <td><?= $_SESSION["reservation"][14] ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->

                            <div class="payment-method">
                                <h3 class="t-info-heading"><span><i class="fa fa-money"></i></span>Cash Payment Instruction</h3>
                                <p>Payment is made by the use of: Cash</p>
                                <p>Step 1 : Accept the terms and conditions</p>
                                <p>Step 2 : Print the details</p>
                                <p>Step 3 : Check the printed form if all your details are correct</p>
                                <p>Step 4 : Pay to the bank at least 50% of the total price</p>
                                <p>Step 5 : An email will be sent to you by the Hotel admin for the confirmation</p>
                                <ul class="list-inline">
                                    <div class="form-group">

                                        <h3> Your booking details and bill</h3>
                                        <input type="checkbox" id="check02" name="checkbox"/>
                                        <label for="check02"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="before-you-fly.php">Hotel Policies, Terms and Conditions.</a></label>
                                        <br><br>
                                        <a href="admin-reservation.php" class="btn btn-orange">Print Details & Reserve</a>
                                    </div>
                                </ul>
                            </div><!-- end payment-method -->
                        </div><!-- end traveler-info -->
                    </div><!-- end space-right -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">

                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="side-bar-block contact">
                            <h2 class="side-bar-heading">Contact Us</h2>
                            <div class="c-list">
                                <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                <div class="text"><p>osas@isatu.edu.ph</p></div>
                            </div><!-- end c-list -->

                            <div class="c-list">
                                <div class="icon"><span><i class="fa fa-phone"></i></span></div>
                                <div class="text"><p>(033) 320-7190</p></div>
                            </div><!-- end c-list -->

                            <div class="c-list">
                                <div class="icon"><span><i class="fa fa-map-marker"></i></span></div>
                                <div class="text"><p>Burgos St. La Paz, Iloilo City Philippines 5000</p></div>
                            </div><!-- end c-list -->
                        </div><!-- end side-bar-block -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="side-bar-block follow-us">
                            <h2 class="side-bar-heading">Follow Us</h2>
                            <ul class="list-unstyled list-inline">
                                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                            </ul>
                        </div><!-- end side-bar-block -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end columns -->

        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end thank-you -->
</section><!-- end innerpage-wrapper -->



<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2018 <a href="#">Iloilo Science and Technology University</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->


<!-- Page Scripts Starts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom-navigation.js"></script>
<!-- Page Scripts Ends -->

</body>
</html>