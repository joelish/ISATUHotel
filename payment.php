<?php
require "auth-checker.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Admin Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        
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
                            <a href="index.php" class="list-group-item">Hotel Homepage</a>
                        </div><!-- end sub-menu -->

                        <a href="#hotels-links" class="list-group-item" data-toggle="collapse" data-parent="#main-menu"><span><i class="fa fa-building link-icon"></i></span>Hotels<span><i class="fa fa-chevron-down arrow"></i></span></a>
                        <div class="collapse sub-menu" id="hotels-links">
                            <a href="index.php" class="list-group-item">Hotel Homepage</a>
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
                                            <li><a href="dashboard.php"><span><i class="fa fa-file"></i></span>Reservation</a></li>
                                            <li><a href="accomodation.php"><span><i class="fa fa-briefcase"></i></span>Accomodation</a></li>
                                            <li class="active"><a href="#"><span><i class="fa fa-dollar"></i></span>Payment</a></li>
                                            <li><a href="sales.php"><span><i class="fa fa-line-chart"></i></span>Sales</a></li>
                                        </ul>
                                    </div><!-- end columns -->
                                    
                                   <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                                        <h2 class="dash-content-title">PAYMENT</h2>
                                        <form>
                                          <div class="form-group right-icon">
                                            <select class="form-control">
                                                <option selected>HOTELS</option>
                                                <option>HRTSC</option>
                                                <option>TLSC</option>
                                            </select>
                                        </div>

                                        <div class="form-group">

                                         <p>From</p>
                                        <input type="date" class="form-control dpd2" required/>

                                        </div>

                                        <div class="form-group">

                                        <p>To</p>
                                        <input type="date" class="form-control dpd2" required/>

                                        </div>
                                        </form>   
                                        
                                        <div class="dashboard-listing recent-activity">
                                            <h3 class="dash-listing-heading">TOTAL PAYMENT PER CATEGORY</h3>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                        <th>PAYMENT</th>
                                                        <th>AMOUNT</th>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="dash-list-text recent-ac-text">CREDIT CARD</td>
                                                            <td class="dash-list-text recent-ac-text">750000</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="dash-list-text recent-ac-text">CASH</td>
                                                            <td class="dash-list-text recent-ac-text">100000</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td class="dash-list-text recent-ac-text">DEPOSIT</td>
                                                            <td class="dash-list-text recent-ac-text">147500</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="dash-list-text recent-ac-text">TOTAL</td>
                                                            <td class="dash-list-text recent-ac-text">322500</td>
                                                        </tr>

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
