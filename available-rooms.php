<?php
session_start();
require "connection.php";
if(!isset($_SESSION["reservation"])){
    header("location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Available Rooms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/download.png" type="image/x-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
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
                        <!-- <li><a href="registration.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li> -->
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
            <!--  <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>-->
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Hotel Homepage</a></li>
                    </ul>
                </li>

                <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Hotel Homepage</a></li>
                        <li class="active"><a href="#">HRTSC</a></li>
                    </ul>
                </li>

                <li class="text">
                    <a href="inquiry-client.php">About us</a>
                </li>

                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <img src="images/logo.png" class="img-responsive" alt="registration-img">
        <!-- <h2 id="web-name"><span><i class="fa fa-plane"></i></span>Star Travel</h2> -->

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">

                <a href="#home-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-home link-icon"></i></span>Home<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="home-links">
                    <a href="hotel-homepage.php" class="list-group-item">Hotel Homepage</a>
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


<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-hotel-grid-list">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Available Rooms</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Available Rooms</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-grid" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">


                    <div class="side-bar-block support-block">
                        <h3>Need Help</h3>
                        <p>Contact us.</p>
                        <div class="support-contact">
                            <span><i class="fa fa-phone"></i></span>
                            <p>(033) 320-7190</p>
                        </div><!-- end support-contact -->
                        <div class="support-contact" style="font-size: small">
                            <span><i class="fa fa-envelope"></i></span>
                            <p style="font-size: medium">vpaa@isatu.edu.ph</p>
                        </div>
                    </div><!-- end side-bar-block -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block main-block ad-block">
                                <div class="main-img ad-img">
                                    <a href="#">
                                        <img src="images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                        <div class="ad-mask">
                                            <div class="ad-text">
                                                <span>Luxury</span>
                                                <h2>Car</h2>
                                                <span>Offer</span>
                                            </div><!-- end ad-text -->
                                        </div><!-- end columns -->
                                    </a>
                                </div><!-- end ad-img -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->


                    </div><!-- end row -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                    <div class="row">

                        <?php
                        foreach ($_SESSION["reservation"][0] as $room){
                            $lowestPrice;
                            $stmt2 = $conn->query("SELECT MIN(rate) AS minimumRate FROM (room_rates) WHERE `room_id` = '$room->id'");
                            while ($row2 = $stmt2->fetch_object()){
                                $lowestPrice = $row2->minimumRate;
                            }
                            ?>
                            <div class="col-sm-6 col-md-6 col-lg-4">
                                <div class="grid-block main-block h-grid-block">
                                    <div class="main-img h-grid-img">
                                        <a href="#">
                                            <img src="<?= $room->image_path ?>" class="img-responsive" alt="hotel-img" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">Starts at ₱<?= $lowestPrice ?><span class="divider"></span><span class="pkg"> | Day</span></li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-grid-img -->

                                    <div class="block-info h-grid-info">

                                        <h3 class="block-title"><a href="hotel-detail-left-sidebar.html"><?= $room->room_name ?></a></h3>
                                        <p><?= $room->room_description?></p>
                                        <div class="grid-btn">
                                            <a href="#<?=$room->id?>" data-toggle="modal">
                                                <button class="btn btn-orange btn-block btn-lg">Book now</button>
                                            </a>
                                        </div><!-- end grid-btn -->
                                    </div><!-- end h-grid-info -->
                                </div><!-- end h-grid-block -->
                            </div><!-- end columns -->

                                                              <!-- modal -->
                            <div id="<?= $room->id ?>" class="modal custom-modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Fill up this form to book this room!</h3>
                                        </div><!-- end modal-header -->

                                        <div class="modal-body">
                                            <form action="redirect-to-cash.php" method="post">
                                                <input type="hidden" value="<?=$room->id?>" name="room">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First Name" name="fname" required/>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name" name="lname" required/>
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address" name="address" required/>
                                                </div>


                                                <div class="form-group right-icon">
                                                <select class="form-control" required name="choice">
                                                    <option selected disabled>Rate Choice</option>
                                                    <?php
                                                        $stmt = $conn->query("SELECT * FROM `room_rates` WHERE `room_id` = '$room->id'");
                                                        while ($row = $stmt->fetch_object()) {
                                                            ?>
                                                            <option value="<?=$row->id?>"><?=$row->rate.'-'.$row->rate_description?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                                </div>
                                                <?php
                                                if($room->hotel_id == 1){
                                                    ?>

                                                    <div class="form-group right-icon">
                                                        <select class="form-control" name="additionalBed">
                                                            <option selected value="0">Additional Bed (Additional P300)</option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <div class="checkbox custom-check">
                                                    <input type="checkbox" id="check01" name="checkbox"/>
                                                    <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="hotel-policy.php">Terms & Conditions.</a></label>
                                                </div>
                                                <button type="submit" class="btn btn-orange">Book</button>
                                            </form>
                                        </div><!-- end modal-bpdy -->
                                    </div><!-- end modal-content -->
                                </div><!-- end modal-dialog -->
                            </div><!-- end add-card -->

                            <?php
                        }
                        ?>


                    </div><!-- end row -->

                </div><!-- end columns -->
                <!--end of modal -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-grid -->
</section><!-- end innerpage-wrapper -->

<div id="footer-bottom" class="ftr-bot-black">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                <p>© 2018 <a href="#">Iloilo Science and Technology University</a>. All rights reserved.</p>
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                <ul class="list-unstyled list-inline">
                    <li><a href="hotel-policy.php">Terms & Condition</a></li>
                    <li><a href="hotel-policy.php">Privacy Policy</a></li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end footer-bottom -->


</section><!-- end footer -->


<!-- Page Scripts Starts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom-navigation.js"></script>
<script src="js/custom-price-slider.js"></script>
<!-- Page Scripts Ends -->
</body>
</html>
