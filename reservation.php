<?php
require "auth-checker.php";
require "connection.php";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
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
                        <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                        <!--<li><a href="registration.php"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>-->
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
            <!--<a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a> -->
        </div><!-- end navbar-header -->

           <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav navbar-right">
                                     <?php
                                    if(isset($_SESSION["user_id"])) {
                                        ?>
                                          <li class="text"><a href="index.php" >Home</a></li>
                                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="hotel-hrsc.php">HRTSC</a></li>
                                        <li><a href="hotel-tlsc.php">TLEC</a></li>
                                    </ul>           
                                </li>
                                <li class="text"><a href="inquiry-client.php">Contact us</a></li>
                                <li class="active"><a href="dashboard.php">Dashboard</a></li>

                                <?php
                                    }
                                    else {
                                        ?>
                                        
                                 <li class="text"><a href="index.php" >Home</a></li>
                                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="hotel-hrsc.php">HRTSC</a></li>
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
                    <a href="index.php" class="list-group-item">Hotel Homepage</a>
                    <a href="hotel-hrsc.php" class="list-group-item">HRTSC</a>
                    <a href="hotel-tlsc.php" class="list-group-item">TLEC</a>
                </div><!-- end sub-menu -->

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--========== PAGE-COVER =========-->
<section class="page-cover dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Admin Dashboard</h1>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="dashboard-wrapper">
                        <div class="row">

                            <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                <ul class="nav nav-tabs nav-stacked text-center">
                                    <li><a href="dashboard.php" style="background-color: #00008B;"><span><i class="fa fa-reply"></i></span>Back</a></li>
                                    <li><a href="accomodation.php" style="background-color: #00008B;"><span><i class="fa fa-briefcase"></i></span>Facts and Figures</a></li>
                                    <li class="active"><a href="#"><span><i class="fa fa-line-chart"></i></span>Reservation</a></li>
                                    <li><a href="web-manage.php" style="background-color: #00008B;"><span><i class="fa fa-desktop"></i></span>Website Management</a></li>
                                    <li><a href="log-tra.php" style="background-color: #00008B;"><span><i class="fa fa-history"></i></span>Log Trail</a></li>
                                </ul>
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                                <h2 class="dash-content-title">RESERVATION</h2>
                                <form action="reservation.php" method="get">
                                    <div class="form-group right-icon">
                                        <select class="form-control" name="hotel">
                                            <option selected>HOTELS</option>
                                            <option value="1">HRTSC</option>
                                            <option value="2">TLEC</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control dpd2" required name="checkIn"/>
                                        <p>All reservations will be displayed on the given date</p>
                                    </div>
                                    <div class="form-group">
                                         <button type="submit" class="btn btn-orange btn-block" >Proceed</button>
                                    </div>
                                </form>

                                <div class="dashboard-listing recent-activity">
                                    <h3 class="dash-listing-heading"><?php

                                        if(!isset($_GET["hotel"])) {
                                            echo "Hotel";
                                        }
                                        elseif ($_GET["hotel"] == 1) {
                                            echo "HRTSC";
                                        }
                                        else {
                                            echo "TLEC";
                                        }
                                        ?></h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>

                                            <!-- Search Bar -->
                                            <div class="input-group">
                                                <form action="reservation.php" method="get">
                                                <input type="text" class="form-control" placeholder="Search reservation number here...." name="reservationId" />
                                                <span class="input-group-btn"><button type="submit" class="btn"><span>
                                                                <i class="fa fa-search"></i>
                                                            </span>
                                                        </button>
                                                    </span>
                                                </form>
                                            </div><!--end search bar -->

                                            <tr>
                                                <th>RESERVATION#</th>
                                                <th>CUSTOMER NAME</th>
                                                <th>HOTEL ROOMS</th>
                                                <th>CHECK IN</th>
                                                <th>CHECK OUT</th>
                                                <th>REMARKS</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                            <?php
                                            $sql;
                                            if(isset($_GET["reservationId"])){
                                            $sql = "SELECT * FROM `reservations` INNER JOIN `reservation_info` INNER JOIN `rooms` WHERE `reservation_info`.`reservation_id` = `reservations`.`id` AND `reservations`.`room_id` = `rooms`.`id` AND `reservations`.`id` = '".$_GET["reservationId"]."'";
                                            }
                                            elseif(isset($_GET["hotel"])) {
                                                $sql = "SELECT * FROM `reservations` INNER JOIN `reservation_info` INNER JOIN `rooms` WHERE `reservations`.`room_id` = `rooms`.`id` AND `reservation_info`.`reservation_id` = `reservations`.`id` AND `rooms`.`hotel_id` = '".$_GET["hotel"]."' AND `check_in` = '".$_GET["checkIn"]."'";
                                            }
                                            else {
                                                $sql = "SELECT * FROM `reservations` INNER JOIN `reservation_info` INNER JOIN `rooms` WHERE `reservations`.`room_id` = `rooms`.`id` AND `reservation_info`.`reservation_id` = `reservations`.`id`";
                                            }
                                            $stmt = $conn->query($sql);
                                            while ($row = $stmt->fetch_object()) {
                                                ?>

                                                <tr>
                                                    <td class="dash-list-text recent-ac-text"><?= $row->reservation_id ?></td>
                                                    <td class="dash-list-text recent-ac-text"><?= $row->first_name.' '.$row->last_name ?></td>
                                                    <td class="dash-list-text recent-ac-text"><?= $row->room_type.' '.$row->room_name?></td>
                                                    <td class="dash-list-text recent-ac-text"><?= date('M d Y', strtotime($row->check_in))?></td>
                                                    <td class="dash-list-text recent-ac-text"><?= date('M d Y', strtotime($row->check_out))?></td>
                                                    <td class="dash-list-text recent-ac-text">
                                                        <?php
                                                            if($row->cancelled_by != null){
                                                                echo "Cancelled";
                                                            }
                                                            elseif($row->cancelled_by == null && mysqli_num_rows($conn->query("SELECT * FROM `payments` WHERE `reservation_id` = '$row->reservation_id'")) > 0){
                                                                echo "Confirmed";
                                                            }
                                                            elseif($row->cancelled_by == null && mysqli_num_rows($conn->query("SELECT * FROM `payments` WHERE `reservation_id` = '$row->reservation_id'")) == 0 && $row->has_confirmed == true) {
                                                                echo "Not Yet Confirmed";
                                                            }
                                                            else {
                                                                echo "Waiting for Confirmation and Payment";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if(mysqli_num_rows($conn->query("SELECT * FROM `payments` WHERE `reservation_id` = '$row->reservation_id'")) == 0) {
                                                            ?>
                                                            <form action="confirm-payment.php" method="post">
                                                                <input type="hidden" value="<?=$row->reservation_id?>" name="id">
                                                                <input type="hidden" value="<?=$row->total_price?>" name="amount">
                                                                <button class="btn btn-info">Confirm Payment</button>
                                                            </form>
                                                        <?php
                                                        }
                                                        if($row->cancelled_by != null) {
                                                            ?>

                                                            <form action="cancel-reservation.php" method="post">
                                                                <input type="hidden" value="<?=$row->reservation_id?>" name="id">
                                                                <input type="hidden" value="<?=$row->cancelled_by?>" name="state">
                                                                 <button class="btn btn-orange btn-block" >Redo Reservation</button>
                                                            </form>
                                                        <?php

                                                        }
                                                        else {
                                                            ?>
                                                            <form action="cancel-reservation.php" method="post">
                                                                <input type="hidden" value="<?=$row->reservation_id?>" name="id">
                                                                <input type="hidden" value="<?=$row->cancelled_by?>" name="state">
                                                                <button class="btn btn-danger">Cancel Reservation</button>
                                                            </form>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end recent-activity -->

                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->



<div id="footer-bottom" class="ftr-bot-black">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                <p>© 2018 <a href="#">Iloilo Science and Technology University</a>. All rights reserved.</p>
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
