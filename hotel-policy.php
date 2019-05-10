<!doctype html>
<html lang="en">
    <head>
        <title>Hotel Policy</title>
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
                   <!-- <a href="#" class="navbar-brand"><span><i class="fa fa-plane"></i>STAR</span>TRAVELS</a>-->
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
                                <li><a href="hotel-tlsc.php">TLEC</a></li>
                            </ul>			
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
                    <a href="hotel-tlsc.php" class="list-group-item">TLEC</a>
                </div><!-- end sub-menu -->

            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->
        
        
        <!--================= PAGE-COVER ================-->
        <section class="page-cover">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Hotel Policy</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Hotel Policy and Rules</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="byf-guidelines" class="innerpage-section-padding">
        		<div class="container">
        			<div class="row">

                    	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side byf-info">
                        	<div class="space-right">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#" data-toggle="tab"><span><i class="fa fa-building"></i></span>Hotel Policy</a></li>
                                    <li><a href="#" data-toggle="tab"><span><i class="fa fa-file"></i></span>Terms and Conditions</a></li>
                                </ul>
                                
                                <div class="tab-content">
    
                                    <div id="airport-info" class="tab-pane in active">
                                        <div class="byf-info-wrap">
                                            <h3 class="byf-info-heading">Guarantee Policy</h3>
                                            <p>Pay for your reservation using cash.</p>
                                            <ul>
                                                <li>Failure to pay for the reservation fee will result to voiding your reservation.</li>
                                                <li>Reservations can only last up to 4 days.</li>
                                                <li>Cheques and other mode of payment is not allowed.</li>
                                            </ul>
                                        </div><!-- end byf-info-wrap -->
                                        
                                        <div class="byf-info-wrap">
                                            <h3 class="byf-info-heading">Cancellation Policy</h3>
                                            <p>Cancellation to be made at least 2 days prior to the hotel check-in time (2pm hours Manila Time) or full fees apply.</p>
                                        </div><!-- end byf-info-wrap -->
                                    </div><!-- end airport-info -->
                                    
                                    <div id="visa-passport" class="tab-pane">
                                        <div class="byf-info-wrap">
                                            <h3 class="byf-info-heading">Terms and Conditions</h3>
                                            <p>Input terms and conditions here.</p>
                                        </div><!-- end byf-info-wrap -->
                                        
                                    </div><!-- end visa-passport -->
                                    
                                </div><!-- end tab-content -->
                        	</div><!-- end space-right -->
                        </div><!-- end columns -->
						
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 side-bar blog-sidebar right-side-bar">
                      
                            <div class="row">    
                            
							<div class="row">
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
                                
                                
                            	<div class="col-xs-12 col-sm-6 col-md-12">
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
        	</div><!-- end byf-guidelines --> 
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