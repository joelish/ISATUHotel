<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Inquiry</title>
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
    <link rel="stylesheet" href="css/modified.css">
</head>


<body>

<!--====== LOADER =====-->
<div class="loader"></div>


<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
    <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
    <div class="overlay-content">
        <div class="form-center">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." required />
                        <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                    </div><!-- end input-group -->
                </div><!-- end form-group -->
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
                            <li><a href="login-user.php"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                            <?php
                        }
                        else {
                            ?>
                            <li><a href="login.php"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <?php
                        }
                        ?>
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
                                <li class="active"><a href="#">Contact us</a></li>
                                <li class="text"><a href="dashboard.php">Dashboard</a></li>

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
                                <li class="active"><a href="#">Contact us</a></li>
                                        <?php
                                    }
                                ?>



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
                    <a href="hotel-tlsc.php" class="list-group-item">TLEC</a>
                </div><!-- end sub-menu -->

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--================= PAGE-COVER ================-->
<section class="page-cover" id="cover-inquiry">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Inquiry</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Inquiry</li>
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
                        <form>
                        <div class="traveler-info">
                            <div class="traveler-info">
                                <h3 class="t-info-heading"><span><i class="fa fa-info-circle"></i></span>Traveler Information</h3>
                                <ul class="list-inline">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required/>
                                    </div>
                                </ul>
                            </div><!-- end of traveler information -->

                            <div class="message">
                                <h3 class="t-info-heading"><span><i class="fa fa-envelope"></i></span>Inquiry Message</h3>
                                <ul class="list-inline">
                                    <div class="form-group">
                                        <textarea  rows="15" class="form-control" required name="question" id="question"></textarea>
                                    </div>

                                    <a href="#thanks" name="btnThanks" id="btnThanks" data-toggle="modal">
                                        <button class="btn btn-orange btn-block">Send</button>
                                    </a>
                                </ul>
                            </div><!-- end payment-method -->
                        </div><!-- end traveler-info -->
                        </form>
                    </div><!-- end space-right -->
                </div><!-- end columns -->

                <!-- modal -->
                <div id="thanks" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="modal-title">Success!</h3>
                            </div><!-- end modal-header -->

                            <div class="modal-body">
                                <form>
                                    <h3>Your inquiry has been submitted to the admin!</h3>
                                    <p>The admin will send you a reply thru email regarding on your inquiry.</p>
                                    <a href="inquiry-client.php" class="btn btn-orange">Inquire again</a>
                                </form>
                            </div><!-- end modal-bpdy -->
                        </div><!-- end modal-content -->
                    </div><!-- end modal-dialog -->
                </div><!-- end add-card -->
                <!--end of modal -->

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">

                    <div class="col-xs-12 col-sm-6 col-md-12">
                        <div class="side-bar-block contact">
                            <h2 class="side-bar-heading">Contact Us</h2>
                            <div class="c-list">
                                <div class="icon"><span><i class="fa fa-envelope"></i></span></div>
                                <div class="text"><p>vpaa@isatu.edu.ph</p></div>
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
    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                    <h3 class="footer-heading">OUR COMPANY / UNIVERSITY</h3>
                    <p>The University is committed to provide quality and relevant advanced education, higher technological, professional instruction and training in arts, sciences, education, architecture, engineering, agriculture,, forestry, and other fields of study, thereby producing locally oriented, globally competitive and eco-friendly human resources. It shall promote research and development programs to advance science and technology and undertake sustainable extension and production activities.</p>
                    <ul class="social-links list-inline list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                    <div class="map">
                    </div>
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

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
<script src="js/custom-navigation.js"></script>
<script>

            $("#btnThanks").click(function (e) {
                e.preventDefault();
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var email = $('#email').val();
                var question = $('#question').val();
                $.ajax({
                    url:"submit-inquiry.php",
                    type:"POST",
                    data: jQuery.param({fname:fname,
                    lname:lname,
                    email:email,
                    question:question
                    }),
                    contentType:"application/x-www-form-urlencoded; charset=UTF-8",
                    dataType:"html",
                    success:function (output) {
                        console.log(output);
                    },
                    error: function (output) {
                        console.log(output);
                    }
                });
            })

</script>
<!-- Page Scripts Ends -->

</body>
</html>