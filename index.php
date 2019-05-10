<?php
session_start();
if(isset($_SESSION["reservation"])) {
    unset($_SESSION["reservation"]);
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Hotel Homepage</title>
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
    
        <!-- Owl Carousel Stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        
        <!-- Flex Slider Stylesheet -->
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
        
        <!--Date-Picker Stylesheet-->
        <link rel="stylesheet" href="css/datepicker.css">
        
        <!-- Magnific Gallery -->
        <link rel="stylesheet" href="css/magnific-popup.css">
    </head>
    
    
    <body id="hotel-homepage">
    
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
        <div id="top-bar" class="tb-text-grey">
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
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end links -->
                    </div><!-- end columns -->              
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end top-bar -->


        <!--========================= FLEX SLIDER =====================-->
        <section class="flexslider-container" id="flexslider-container-3">
            
            <div class="header-absolute">
                <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" id="mynavbar">
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
                                          <li class="active"><a href="#" >Home</a></li>
                                           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hotels<span><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="hotel-hrsc.php">HRTSC</a></li>
                                        <li><a href="hotel-tlsc.php">TLEC</a></li>
                                    </ul>           
                                </li>
                                <li class="text"><a href="inquiry-client.php">Contact us</a></li>
                                <li class="text"><a href="dashboard.php">Dashboard</a></li>

                                <?php
                                    }
                                    else {
                                        ?>
                                        
                                 <li class="active"><a href="#" >Home</a></li>
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
            </div><!-- end header-absolute -->
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

            <div class="flexslider slider" id="slider-3">
                <ul class="slides">

                    <li class="item-1 back-size" style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hrt-bldg.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-1 -->

                    <li class="item-2 back-size" style="background:         linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/hrt-bldg1.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-2 -->

                    <li class="item-3 back-size" style="background:         linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/tlsc-bldg.jpg) 50% 65%;background-size:cover;height:100%;">
                    </li><!-- end item-2 -->

                </ul>
            </div><!-- end slider -->
            
        </section><!-- end flexslider-container -->
        
        
        <!--======================= BEST FEATURES ======================-->
        <section id="best-features" class="banner-padding orange-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-dollar"></i></span>
                            <h3>Best Price Guarantee</h3>
                            <p>All of our price are affordable compare to other hotels.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-lock"></i></span>
                            <h3>Safe and Secure</h3>
                            <p>Safety is our number one concern. Security guards and 24/7 CCTV cameras will secure your safety.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-thumbs-up"></i></span>
                            <h3>Relaxation Guarantee</h3>
                            <p>Your relaxation is guaranteed on all of our hotels.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                   
                   <div class="col-sm-6 col-md-3">
                        <div class="b-feature-block">
                            <span><i class="fa fa-bars"></i></span>
                            <h3>Travel Guidelines</h3>
                            <p>Travelling from your point to here is so easy.</p>
                        </div><!-- end b-feature-block -->
                   </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end best-features -->
        
    
        
        <!--=============== LUXURY ROOMS ===============-->
        <section id="luxury-rooms" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 luxury-img luxury-room-imgs">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                <a href="images/1.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-responsive" src="images/1.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                <a href="images/2.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-responsive" src="images/2.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                <a href="images/3.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-responsive" src="images/3.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 luxury-room-block">
                                <a href="images/4.jpg" title="image-7" class="with-caption gallery image-link">
                                <img class="img-responsive" src="images/4.jpg" alt="luxury-room-img">
                                </a>
                            </div>
                        </div>
                        
                    </div><!-- end columns -->
                    
                      <div class="col-sm-12 col-md-12 col-lg-6 luxury-text luxury-room-text">
                        <h2>Our Hotels and Rooms</h2>
                        <p>Enjoy world-class service amidst tranquil surroundings, coupled with inspirational design and transformative experiences in some of the world's finest urban addresses and resort destinations. Achieve more with every meeting and event you plan with us. Create priceless experiences that are engaging and productive.</p>
                        <a href="hotel-hrsc.php" class="btn btn-black">From ₱3500/Day</a>
                        <a href="hotel-tlsc.php" class="btn btn-o-border">View Details</a>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end luxury-rooms -->
                    

         <!--=============== TESTIMONIALS ===============-->
       <section id="testimonials" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-heading white-heading">
                            <h2>Testimonials</h2>
                            <hr class="heading-line" />
                        </div> 

                   <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div class="carousel-inner text-center">
                            
                                <div class="item active">
                                    <blockquote>A very comfortable place. I found this hotel in the Internet. I wrote there by e-mail and got information I wanted very quickly. I consulted my family and we decided to stay in it. My overall impression is very positive. Though the furniture in the room isn't new, it adds some charm to the place. The room was very spacious. There was a tea/coffee set. The towels were changed every day. The cleaning was well-done.The staff is very helpful and hospitable. The breakfasts are also quite sufficient. If you look for modern things and luxury, it isn't for you. If you look for comfort, cozyness and hospitality, then it might be your choice. I'm sure I'll stay there again.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                    </div> 
                                    
                                  <small>Edu Manzano</small>
                                </div> 
                                
                            <div class="item">
                                    <blockquote>Nice staff, near bus access, very big room and silently sleep. You can find cheap food in train station nearby hotel. We found very cheap items shop near this hotel too, they sell souvenir and more things.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div>
                                            
                                 <small>Coco Martin</small>
                                </div>
                                
                              <div class="item">
                                    <blockquote>We spent 2 nights here and really enjoyed our stay. The hotel is within easy walking distance of the harbor, train station, downtown shopping, and practically next door to the wonderful botanical gardens. The staff is very friendly and helpful. We had a very nice dinner that was reasonably priced in the restaurant and a very good buffet breakfast was included daily in the price of our stay. The rooms were clean and comfortable.</blockquote>
                                    <div class="rating">
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star orange"></i></span>
                                        <span><i class="fa fa-star lightgrey"></i></span>
                                    </div>
                                    
                                   <small>Yassi Pressman</small>
                                </div>
                                
                       </div>
                            
                       <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/test-edu.jpg" class="img-responsive"  alt="client-img">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img src="images/test-coco.jpg" class="img-responsive"  alt="client-img">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img src="images/test-yassi.jpg" class="img-responsive"  alt="client-img">
                                </li>
                                     </ol>
                 
                                 </div>
                           </div>
                       </div>
                  </div>
                </section> 
        
        
        <!--================ PACKAGES ==============-->
        <section id="hotel-packages" class="section-padding"> 
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">           
                        <div class="page-heading">
                            <h2>Our Packages</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->
                        
                        <div class="row" id="hotel-package-tables">
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-offset-1 col-lg-10 col-lg-offset-1"> 
                            
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Budget Room</h2>
                                                <h2 class="h-pkg-price">₱1000<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Private Balcony</li>
                                                    <li>Air conditioning</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Hot/ cold water</li>
                                                    <li>Writing desk and chair</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button>  
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-r no-pd-l">
                                        <div class="package hotel-package best-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Luxury Room</h2>
                                                <h2 class="h-pkg-price">₱2000<span>night</span></h2>
                                            </div><!-- end h-pkg-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Air conditioning</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Hot/ cold water</li>
                                                    <li>Writing desk and chair</li>
                                                    <li>Shower and bath tub</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->
                                    
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center no-pd-l">
                                        <div class="package hotel-package">        
                                            <div class="h-pkg-heading">
                                                <h2 class="h-pkg-title">Simple Room</h2>
                                                <h2 class="h-pkg-price">₱1200<span>night</span></h2>
                                            </div><!-- end h-package-heading -->
                                            
                                            <div class="pkg-features">
                                                <ul class="list-unstyled text-center">
                                                    <li>Breakfast</li>
                                                    <li>Private Balcony</li>
                                                    <li>Air conditioning</li>
                                                    <li>Free Wifi</li>
                                                    <li>Bathroom</li>
                                                    <li>Writing desk and chair</li>
                                                </ul>
                                            </div><!-- end features -->
                                            <button class="btn">Select Package</button> 
                                        </div><!-- end hotel-package -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hotel-packages -->
        
        
        <!--======================= FOOTER =======================-->
        <section id="footer" class="ftr-heading-w ftr-heading-mgn-2">
        
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
                    
                        
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end footer-top -->

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
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-navigation.js"></script>
        <script src="js/custom-flex.js"></script>
        <script src="js/custom-owl.js"></script>
        <script src="js/custom-date-picker.js"></script>
        <script src="js/custom-gallery.js"></script>
        <!-- Page Scripts Ends -->
        
    </body>
</html> 