<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Descalzo - Travel and tourism</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('template/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('template/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('template/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('template/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('template/images/favicon.ico')}}">
    </head>
    <body>
        <div class="loader-wrap">
            <div class="pin">
                <div class="pulse"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
        
            <header class="main-header">
                <!-- header-top-->
                <div class="header-top fl-wrap">
                    <div class="container">
                        <div class="logo-holder">
                            <a href="{{route('home')}}"><img src="{{asset('template/images/logo.png')}}" alt=""></a>
                        </div>
                        <a href="dashboard-add-listing.html" class="add-hotel">Add Your Hotel <span><i class="far fa-plus"></i></span></a>
                        <h1>{{session('msg')}}</h1>
                        <div class="show-reg-form">
                        <a href="{{route('login')}}">
                        <i class="fa fa-sign-in"></i>Sign In </a>
                        </div>
                        <div class="lang-wrap">
                            <div class="show-lang"><img src="{{asset('template/images/lan/1.png')}}" alt=""> <span>Eng</span><i class="fa fa-caret-down"></i></div>
                            <ul class="lang-tooltip green-bg">
                                <li><a href="#"><img src="{{asset('template/images/lan/4.png')}}" alt=""> De</a></li>
                                <li><a href="#"><img src="{{asset('template/images/lan/5.png')}}" alt=""> It</a></li>
                                <li><a href="#"><img src="{{asset('template/images/lan/2.png')}}" alt=""> Fr</a></li>
                                <li><a href="#"><img src="{{asset('template/images/lan/3.png')}}" alt=""> Es</a></li>
                            </ul>
                        </div>
                        <div class="currency-wrap">
                            <div class="show-currency-tooltip"><i class="fas fa-dollar-sign"></i> <span>USD <i class="fa fa-caret-down"></i> </span></div>
                            <ul class="currency-tooltip">
                                <li><a href="#"><i class="far fa-euro-sign"></i> EUR</a></li>
                                <li><a href="#"><i class="far fa-pound-sign"></i> GBP</a></li>
                                <li><a href="#"><i class="far fa-ruble-sign"></i>RUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-top end-->
                <!-- header-inner-->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <div class="show-search-button"><span>Search</span> <i class="fas fa-search"></i> </div>
                        @yield('account')
                        <!-- <div class="wishlist-link"><i class="fal fa-heart"></i><span class="wl_counter">3</span></div> -->
                        <!-- <div class="header-user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('template/images/avatar/4.jpg')}}" alt=""></span>
                                My account
                            </div>
                            <ul>
                                <li><a href="dashboard-myprofile.html"> Edit profile</a></li>
                                <li><a href="dashboard-add-listing.html"> Add Listing</a></li>
                                <li><a href="dashboard-bookings.html">  Bookings  </a></li>
                                <li><a href="dashboard-review.html"> Reviews </a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div> -->
                        <div class="home-btn"><a href="{{route('homePage')}}"><i class="fas fa-home"></i></a></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap color-bg">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="act-link">Home <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.html">Parallax Image</a></li>
                                            <li><a href="index2.html">Slider</a></li>
                                            <li><a href="index3.html">Video</a></li>
                                            <li><a href="index4.html">Slideshow</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#">Listings <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="listing.html">Column map</a></li>
                                            <li><a href="listing6.html">Column map 2</a></li>
                                            <li><a href="listing2.html">Fullwidth Map</a></li>
                                            <li><a href="listing3.html">Fullwidth Map 2</a></li>
                                            <li><a href="listing4.html">Without Map</a></li>
                                            <li><a href="listing5.html">Without Map 2</a></li>
                                            <li>
                                                <a href="#">Single <i class="fas fa-caret-down"></i></a>
                                                <!--third  level  -->
                                                <ul>
                                                    <li><a href="listing-single.html">Style 1</a></li>
                                                    <li><a href="listing-single2.html">Style 2</a></li>
                                                    <li><a href="listing-single3.html">Style 3</a></li>
                                                    <li><a href="listing-single4.html">Style 4</a></li>
                                                </ul>
                                                <!--third  level end-->
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="blog.html">News</a>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="{{route('contactPage')}}">Contacts</a></li>
                                            <li><a href="author-single.html">User single</a></li>
                                            <li><a href="help.html">Help FAQ</a></li>
                                            <li><a href="pricing-tables.html">Pricing</a></li>
                                            <li><a href="booking-single.html">Booking</a></li>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="blog2.html">Blog Classik</a></li>
                                            <li><a href="{{route('singleBlogPage')}}">Blog Single</a></li>
                                            <li><a href="dashboard-add-listing.html">Add Listing</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                        <!-- wishlist-wrap-->
                        <div class="wishlist-wrap scrollbar-inner novis_wishlist">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/gal/7.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Park Central</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>
                                                <span class="rooms-price">$80 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/gal/8.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Holiday Home</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>
                                                <span class="rooms-price">$50 <strong> /   Awg</strong></span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/gal/9.jpg')}}" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Moonlight Hotel</a>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>
                                                <span class="rooms-price">$105 <strong> /  Awg</strong></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- wishlist-wrap end-->
                    </div>
                </div>
                <!-- header-inner end-->
                <!-- header-search -->
                <div class="header-search vis-search">
                    <div class="container">
                        <div class="row">
                            <!-- header-search-input-item -->
                            <div class="col-sm-4">
                                <div class="header-search-input-item fl-wrap location autocomplete-container">
                                    <label>Destination or Hotel Name</label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                                    <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap date-parent">
                                    <label>Date In-Out </label>
                                    <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                                    <input type="text" placeholder="When" name="header-search"   value=""/>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-3">
                                <div class="header-search-input-item fl-wrap">
                                    <div class="quantity-item">
                                        <label>Rooms</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Adults</label>
                                        <div class="quantity">
                                            <input type="number" min="1" max="3" step="1" value="1">
                                        </div>
                                    </div>
                                    <div class="quantity-item">
                                        <label>Children</label>
                                        <div class="quantity">
                                            <input type="number" min="0" max="3" step="1" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                            <!-- header-search-input-item -->
                            <div class="col-sm-2">
                                <div class="header-search-input-item fl-wrap">
                                    <button class="header-search-button" onclick="window.location.href='{{route('hotelList')}}'">Search <i class="far fa-search"></i></button>
                                </div>
                            </div>
                            <!-- header-search-input-item end -->
                        </div>
                    </div>
                    <div class="close-header-search"><i class="fal fa-angle-double-up"></i></div>
                </div>
                <!-- header-search  end -->
            </header>
            <!--  header end -->
              <!--footer -->
              
            @yield('content')

            <footer class="main-footer">
                <!--subscribe-wrap-->
                <div class="subscribe-wrap color-bg  fl-wrap">
                    <div class="container">
                        <div class="sp-bg"> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="subscribe-header">
                                    <h3>Subscribe</h3>
                                    <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <div class="footer-widget fl-wrap">
                                    <div class="subscribe-widget fl-wrap">
                                        <div class="subcribe-form">
                                            <form id="subscribe">
                                                <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fas fa-rss-square"></i> Subscribe</button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wave-bg"></div>
                </div>
                <!--subscribe-wrap end -->
                <!--footer-inner-->
                <div class="footer-inner">
                    <div class="container">
                        <!--footer-fw-widget-->
                        <div class="footer-fw-widget fl-wrap">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="footer-carousel-title">
                                        Our partners
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!--footer-carousel-wrap-->
                                    <div class="footer-carousel-wrap fl-wrap">
                                        <div class="footer-carousel fl-wrap">
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/1.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/2.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/3.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/4.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/5.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                            <!--footer-carousel-item-->
                                            <div class="footer-carousel-item">
                                                <a href="#"><img src="{{asset('template/images/partners/6.png')}}" alt=""></a>
                                            </div>
                                            <!--footer-carousel-item end-->
                                        </div>
                                        <div class="fc-cont  fc-cont-prev"><i class="fal fa-angle-left"></i></div>
                                        <div class="fc-cont  fc-cont-next"><i class="fal fa-angle-right"></i></div>
                                    </div>
                                    <!--footer-carousel-wrap end-->
                                </div>
                            </div>
                        </div>
                        <!--footer-fw-widget end-->
                        <div class="row">
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>About Us</h3>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                        <ul  class="footer-contacts fl-wrap">
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                            <li> <span><i class="fal fa-map-marker-alt"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                        </ul>
                                        <div class="footer-social">
                                            <span>Find us : </span>
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--footer-widget end-->
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>Our Last News</h3>
                                    <div class="widget-posts fl-wrap">
                                        <ul>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/all/1.jpg')}}" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Vivamus dapibus rutrum</a>
                                                    <span class="widget-posts-date"> 21 Mar 09.05 </span>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/all/2.jpg')}}" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title=""> In hac habitasse platea</a>
                                                    <span class="widget-posts-date"> 7 Mar 18.21 </span>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="{{asset('template/images/all/3.jpg')}}" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Tortor tempor in porta</a>
                                                    <span class="widget-posts-date"> 7 Mar 16.42 </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--footer-widget end-->
                            <!--footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>Our  Twitter</h3>
                                    <div id="footer-twiit" class="fl-wrap"></div>
                                    <a href="#" class="twitter-link" target="_blank">Follow</a>
                                </div>
                            </div>
                            <!--footer-widget end-->
                        </div>
                        <div class="clearfix"></div>
                        <!--footer-widget -->
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-md-4"><a class="contact-btn color-bg" href="{{route('contactPage')}}">Get In Touch<i class="fal fa-envelope"></i></a></div>
                                <div class="col-md-8">
                                    <div class="customer-support-widget fl-wrap">
                                        <h4>Customer support : </h4>
                                        <a href="tel:+19012300888" class="cs-mumber">+1(901)2300888</a>
                                        <a href="tel:+19012300888" class="cs-mumber-button color2-bg">Call Now <i class="far fa-phone-volume"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--footer-widget end -->
                    </div>
                </div>
                <!--footer-inner end -->
                <div class="footer-bg">
                </div>
                <!--sub-footer-->
                <div class="sub-footer">
                    <div class="container">
                        <div class="copyright"> &#169; EasyBook 2018 .  All rights reserved.</div>
                        <div class="subfooter-lang">
                            <div class="subfooter-show-lang"><span>Eng</span><i class="fa fa-caret-up"></i></div>
                            <ul class="subfooter-lang-tooltip">
                                <li><a href="#">Dutch</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                        <div class="subfooter-nav">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--sub-footer end -->
            </footer>

            <!--footer end -->

            @yield('map-model')
             <!--register form -->
             <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->
                        <div id="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content">
                                    <h3>Sign In <span>Des<strong>calzo</strong></span></h3>
                                    <div class="custom-form">

                                        <form method="post">
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit" name="login"  class="log-submit-btn color-bg"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>

                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <h3>Sign Up <span>Des<strong>calzo</strong></span></h3>
                                        <div class="custom-form">
                                            <form method="post" class="main-register-form" id="main-register-form2">
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit" name="register"    class="log-submit-btn color-bg"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>
            
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{asset('template/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('template/js/scripts.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
        @yield('js')
    </body>
</html>