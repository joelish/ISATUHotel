<?php
session_start();
if(isset($_GET["roomId"])) {
    require "connection.php";
    $stmt = $conn->query("SELECT * FROM `rooms` WHERE `id` = '".$_GET["roomId"]."'");
    $roomObject;
    while ($row = $stmt->fetch_object()) {
        $roomObject = $row;
    }
}
else {
    header("location:index.php");
}
?>


<!doctype html>
<html lang="en">
<head>
    <title><?= $roomObject->room_type.' '.$roomObject->room_name ?></title>
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

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
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
                        <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>
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
        </div><!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>

        </body>
        </html>

            <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav navbar-right">
                                     <?php
                                    if(isset($_SESSION["user_id"])) {
                                        ?>
                                          <li class="text"><a href="index.php" >Home</a></li>
                                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="text"><a href="hotel-hrsc.php">HRTSC</a></li>
                                        <li><a href="hotel-tlsc.php">TLEC</a></li>
                                    </ul>           
                                </li>
                                <li class="text"><a href="inquiry-client.php">Contact us</a></li>
                                <li class="text"><a href="dashboard.php">Dashboard</a></li>

                                <?php
                                    }
                                    else {
                                        ?>
                                        
                                 <li class="text"><a href="index.php" >Home</a></li>
                                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="text"><a href="hotel-hrsc.php">HRTSC</a></li>
                                        <li><a href="hotel-tlsc.php">TLEC</a></li>
                                    </ul>           
                                </li>
                                <li class="text">
                                    <a href="inquiry-client.php">Contact us</a>
                                </li>
                                        <?php
                                    }
                                ?>



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


<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-hotel-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Hotel and Restaurant Technology Service Center</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?= $roomObject->room_type . ' ' . $roomObject->room_name ?> </li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                    <div class="row">


                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block support-block">
                                <h3>Need Help</h3>
                                <p>Contact us.</p>
                                <div class="support-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>(033) 320-7190 loc 234</p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                    <!-- slider pictures for the page -->
                    <!-- room pictures from database -->

                    <div class="detail-slider">
                        <div class="feature-slider">
                            <div><img src="<?=$roomObject->image_path?>" class="img-responsive" alt="feature-img"/></div>
                        </div><!-- end feature-slider -->


                    </div>  <!-- end detail-slider -->

                    <div class="detail-tabs" id="packages">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#hotel-overview" data-toggle="tab">Room Overview</a></li>
                            <?php
                            $stmt = $conn->query("SELECT * FROM `packages` WHERE `room_id` = '".$_GET["roomId"]."' AND `date_deleted` IS NULL");
                            while ($row = $stmt->fetch_object()) {
                                $strId = str_replace(' ','',$row->package_title)
                                ?>
                                <li><a href="<?='#'.$strId?>" data-toggle="tab"><?= $row->package_title?></a></li>
                            <?php
                            }
                            ?>

                        </ul>

                        <div class="tab-content">

                            <div id="hotel-overview" class="tab-pane in active">
                                <div class="row">
                                    <?php
                                    $stmt = $conn->query("SELECT * FROM `rooms` WHERE `id` = '".$_GET["roomId"]."'");
                                    $roomObject = null;
                                    while ($row = $stmt->fetch_object()) {
                                        $roomObject = $row;
                                    }
                                    ?>
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="<?=$roomObject->image_path?>" class="img-responsive" alt="flight-detail-img" />
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">

                                        <h3><?=$roomObject->room_description?></h3>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end hotel-overview -->
                            <?php
                                $stmt = $conn->query("SELECT * FROM  `packages` WHERE `room_id` = '".$_GET["roomId"]."' AND `date_deleted` IS NULL");
                                while ($row = $stmt->fetch_object()) {

                                    $strId = str_replace(' ','',$row->package_title)
                                    ?>

                                    <div id="<?= $strId ?>" class="tab-pane">
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 tab-img">
                                                <img src="<?= $row->image_path?>" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->

                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <h3><?= $row->package_title ?></h3>
                                                <h2>Price: <?= $row->price?></h2>
                                                <p><?= $row->package ?></p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->
                            <?php
                                }
                            ?>

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->



                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end hotel-details -->

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
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom-navigation.js"></script>
<script src="js/custom-date-picker.js"></script>
<script src="js/custom-slick.js"></script>
<script>
    function toggleCreditCardDiv() {
        var element = document.getElementById('paymentMethod').value;
        if(element === 'card') {
            document.getElementById('cardDetails').style.display = 'block';
        } else  {
            document.getElementById('cardDetails').style.display = 'none';
        }
    }
</script>
<!-- Page Scripts Ends -->
</body>
</html>
