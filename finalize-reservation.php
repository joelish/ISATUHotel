<?php
require "auth-checker.php";
require "connection.php";
if(!isset($_SESSION["reservation"])) {
    header("location:reservation-fill.php");
}
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
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Hotel Homepage</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="hotel-hrsc.php" class="list-group-item">HRTSC</a></li>
                        <li><a href="hotel-tlsc.php" class="list-group-item">TLSC</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
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
                    <a href="hotel-homepage.php" class="list-group-item">Hotel Homepage</a>
                </div><!-- end sub-menu -->

                <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                <div class="collapse sub-menu" id="hotels-links">
                    <a href="hotel-homepage.php" class="list-group-item">Hotel Homepage</a>
                    <a href="hotel-hrsc.php" class="list-group-item">HRTSC</a>
                    <a href="hotel-tlsc.php" class="list-group-item">TLSC</a>
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
                                    <li><a href="inquiry.php"><span><i class="fa fa-vcard-o"></i></span>Inquiry</a></li>
                                    <li class="active"><a href="#"><span><i class="fa fa-file"></i></span>Reservation</a></li>
                                    <li><a href="accomodation.php"><span><i class="fa fa-briefcase"></i></span>Reports</a></li>
                                </ul>
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                                <form action="set-all-reservations.php" method="post">
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
                                        <select class="form-control" name="room" id="room" required>
                                            <option selected disabled>Rooms</option>
                                            <?php
                                            $roomsArray = array();
                                            $stmt = $conn->query("SELECT * FROM `rooms` WHERE `hotel_id` = '".$_SESSION["reservation"][4]."'");
                                            while ($row = $stmt->fetch_object()) {
                                                array_push($roomsArray, $row);
                                            }
                                            $i=0;
                                            foreach ($roomsArray as $room) {
                                                if(mysqli_num_rows($conn->query("SELECT * FROM `reservations` WHERE ((`check_in` between '".$_SESSION["reservation"][0]."' AND '".$_SESSION["reservation"][1]."') OR (`check_out` between '".$_SESSION["reservationInfo"][0]."' AND '".$_SESSION["reservation"][1]."')) AND `room_id` = '$room->id' AND `cancelled_by` IS NULL")) > 0) {
                                                    array_splice($roomsArray,$i,1);
                                                    continue;
                                                }
                                                else{
                                                    ?>
                                                    <option value="<?=$room->id?>"><?=$room->room_type.' '.$room->room_name?></option>
                                                    <?php
                                                }
                                                $i++;
                                            }
                                            ?>
                                        </select>

                                    </div>

                                    <div class="form-group right-icon">
                                        <select class="form-control" required name="choice" id="choice">
                                            <option selected disabled>Rate Choice</option>

                                        </select>
                                    </div>
                                    <?php
                                    if($_SESSION["reservation"][4] == 1){
                                        ?>

                                        <div class="form-group right-icon">
                                            <select class="form-control" name="additionalBed" required>
                                                <option selected value="0" disabled>Additional Bed (Additional P300)</option>
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
<script>
    $(document).ready(function(){
        $("#room").change(function () {
            var room_id = $(this).val();
            $.ajax({
                url:"get-packages.php",
                type:"POST",
                data:{room_id:room_id},
                dataType:"Text",
                success:function (data) {
                    var selectName='package';
                    $('#'+selectName).html(data);
                }
            });
        });

        $("#room").change(function () {
            var room_id = $(this).val();
            $.ajax({
                url:"get-prices.php",
                type:"POST",
                data:{room_id:room_id},
                dataType:"Text",
                success:function (data) {
                    var selectName='choice';
                    $('#'+selectName).html(data);
                }
            });
        });


    });
</script>
<!-- Page Scripts Ends -->
</body>
</html>
