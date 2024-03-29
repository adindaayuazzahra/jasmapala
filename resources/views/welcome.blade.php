<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Clifton Hotel - One-Page Parallax HTML5 Travel Booking Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="weibergmedia">
    <meta name="Description" content="Clifton Hotel - One-Page Parallax HTML5 Travel Booking Template" />
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic,600" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/modernizr.custom.js') }}" type="text/javascript"></script>
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">
            <div class="parent">
                <div class="child">
                    <p class="small">loading</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- start full-page intro -->
    <section class="bg-image-3 with-bg parallax parallax1 section" id="section1">
        {{-- <video class="vimeo-background" width="500" height="281" controls autoplay muted>
            <source src="{{ asset('video/header.mp4') }}" type="video/mp4">
        </video> --}}
        {{-- <div class="vimeo-background"> --}}
        {{-- <div class="jumbotron">
            <video controls playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{ asset('video/header.mp4') }}" type="video/mp4">
            </video>
        </div> --}}
        {{-- </div> --}}
        <video class="vimeo-background" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('video/header.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay">
            <div class="parent">
                <div class="child">
                    <p class="extra-padding-top"><span class="padding"><i class="fa fa-star"></i></span><span
                            class="padding"><i class="fa fa-star"></i></span><span class="padding"><i
                                class="fa fa-star"></i></span><span class="padding"><i
                                class="fa fa-star"></i></span><span class="padding"><i
                                class="fa fa-star-half-o"></i></span></p>
                    <h1>Clifton Hotel <span class="italic">&amp;</span> Resort</h1>
                    <p class="large">Experience nature in its purest form, while enjoying attention to detail,
                        indulgent pampering and exceptional cuisine.</p>
                </div>
            </div>
        </div>
        <a href="#section2" data-title="" id="arrow-down" class="aligncenter">Get started</a>
    </section>
    <!-- end full-page intro -->
    <!-- start header -->
    <header class="clearfix">
        <div id="logo"> <a href="index.html">Clifton</a> </div>
        <div class="tagline"><span>Hotel &amp; Resort</span></div>
        <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span>
        </div>
        <nav>
            <ul id="nav">
                <li class="active"><a href="#section1">Home</a> </li>
                <li><a href="#section2">Rooms</a> </li>
                <li><a href="#section3">Reservation</a> </li>
                <li><a href="#section4">About</a></li>
                <li><a href="#section5">Deals</a> </li>
                <li><a href="#section6">Contact</a> </li>
                <li><a href="blog.html"><i class="fa fa-external-link"></i> Blog</a> </li>
            </ul>
        </nav>
    </header>
    <!-- end header -->
    <!-- start main content -->
    <section class="section white-bg" id="section2">
        <div id="ancor2"></div>
        <!-- start ajax -->
        <div id="ajax-anchor"></div>
        <div class="ajax-content" id="ajax-content"></div>
        <div id="loading">
            <p>loading</p>
        </div>
        <!-- end ajax -->
        <div class="container clearfix">
            <div class="nautical-1"></div>
            <div class="col-lg-12 centered header-wrapper">
                <h2>Our Rooms</h2>
                <p class="large">Comfort and elegance come together to offer our guests a stay, that is highlighted by
                    disconnecting in a wonderful environment with attention to detail.</p>
            </div>
            <div class="col-lg-6 col-md-6 with-bg">
                <div class="margin-wrapper"><a class="simple-ajax-popup" href="ajax/project1.html"
                        data-title="Project Title Here"> <img alt="" src="images/full06-lowres.jpg" />
                        <div class="covering-image centered">
                            <div class="info-box-content">
                                <div class="parent">
                                    <div class="child">
                                        <h3 class="header">Double Deluxe</h3>
                                        <p><i>Romantic Getaway for Two</i></p>
                                        <div class="left-side">
                                            <p class="small"><i class="fa fa-bus"></i> <i class="fa fa-hotel"></i>
                                                <i class="fa fa-cutlery"></i>
                                            </p>
                                        </div>
                                        <div class="right-side">
                                            <p class="small">$349/night</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="col-lg-6 col-md-6 with-bg">
                <div class="margin-wrapper"><a class="simple-ajax-popup" href="ajax/project2.html"
                        data-title="Project Title Here"> <img alt="" src="images/full02-lowres.jpg" />
                        <div class="covering-image centered">
                            <div class="info-box-content">
                                <div class="parent">
                                    <div class="child">
                                        <h3 class="header">Sea View Suites</h3>
                                        <p><i>King-Size Bed</i></p>
                                        <div class="left-side">
                                            <p class="small"><i class="fa fa-coffee"></i> <i class="fa fa-wifi"></i>
                                                <i class="fa fa-tv"></i> <i class="fa fa-key"></i>
                                            </p>
                                        </div>
                                        <div class="right-side">
                                            <p class="small">$229/night</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="section" id="section3">
        <div id="ancor3"></div>
        <div class="container clearfix">
            <div class="nautical-2"></div>
            <div class="col-lg-12 centered header-wrapper no-plarge">
                <h2>Room Reservation</h2>
            </div>
        </div>
        <!-- start reservation form -->
        <div class="container clearfix" id="sandbox-container">
            <form method="post" action="reservation.php" name="reservation" id="reservation" autocomplete="off"
                class="form">
                <fieldset>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <label>Full Name</label>
                        <input type="text" name="Name" id="name" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <label>Email Address</label>
                        <input type="text" name="Email" id="email" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <label>Phone</label>
                        <input type="text" name="Phone" id="phone" />
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <label>Room</label>
                        <div class="selector">
                            <select id="room">
                                <option value="Double Deluxe" selected>Double Deluxe</option>
                                <option value="Ocean View Suites">Sea View Suites</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-daterange input-group" id="datepicker">
                            <label>Arrival Date</label>
                            <input type="text" name="start" id="start" />
                            <span class="input-group-addon">to</span>
                            <label>Departure Date</label>
                            <input type="text" name="end" id="end" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <label>Adults</label>
                        <div class="selector">
                            <select id="adults">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <label>Children</label>
                        <div class="selector">
                            <select id="children">
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 centered">
                        <div class="button full-width">
                            <input type="submit" class="submit" id="submit" value="Submit" />
                        </div>
                    </div>
                    <div class="col-lg-12 centered">
                        <div class="message-holder"><span id="message"></span></div>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- end reservation form -->
    </section>
    <section class="section with-bg bg-image-1 parallax parallax2">
        <div class="overlay"></div>
        <div class="container clearfix centered">
            <div class="col-lg-12 centered">
                <h2>Testimonials</h2>
            </div>
            <div class="col-lg-6 aligncenter">
                <div class="flexslider testimonials">
                    <ul class="slides">
                        <li>
                            <blockquote class="clearfix centered">
                                <p>By far our best vacation yet! It was so relaxing, we never wanted to leave.</p>
                                <p class="small">Steve Jacobs, Canada</p>
                            </blockquote>
                        </li>
                        <li>
                            <blockquote class="clearfix centered">
                                <p> What can we say?! We were just blown away by the attention to detail and the
                                    flawless service.</p>
                                <p class="small">Hannah Stroj, Sweden</p>
                            </blockquote>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section white-bg" id="section4">
        <div id="ancor4"></div>
        <div class="container clearfix">
            <div class="nautical-3"></div>
            <div class="col-lg-12 centered header-wrapper">
                <h2>The <span class="italic">Grand</span> Hotel</h2>
                <p class="large">We have been a family business since 1982, striving relentlessly for unparalled
                    customer satisfaction.</p>
            </div>
        </div>
        <div class="container clearfix">
            <div id="container">
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons food-dome-serving"></div>
                        <h4>24/7 Concierge Service</h4>
                        <p>This is consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec
                            elite maecenas modern forte elementum vehicula.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 element home">
                    <div class="margin-wrapper"><img alt="" src="images/full08.jpg" /></div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons beach"></div>
                        <h4>Pool <span class="italic">&amp;</span> Spa</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons snorkel-mask"></div>
                        <h4>Snorkling Lessons</h4>
                        <p>This is consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec
                            elite maecenas modern forte elementum vehicula.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons dumbell"></div>
                        <h4>Fully Equipped Gym</h4>
                        <p>This is consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons hat-chef"></div>
                        <h4>2 Michelin Stars Cooking</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 element home">
                    <div class="border-wrapper">
                        <div class="icons safe-2"></div>
                        <h4>Safes in All Rooms</h4>
                        <p>This is consequat luctus at justo auctor metus est donec. Tempus terminal morbi nulla donec
                            elite maecenas modern forte elementum vehicula.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container clearfix">
            <div class="nautical-4"></div>
            <div class="col-lg-12 centered logo-wrapper">
                <h4>Travellers' Choice 2013-2016</h4>
                <p><i>Awards</i></p>
                <div class="tripadvisor"></div>
            </div>
        </div>
    </section>
    <section class="section with-bg bg-image-2 parallax parallax3">
        <div class="overlay"></div>
        <div class="container clearfix centered">
            <div class="col-lg-12 centered">
                <p class="small above-h2">Video Tour</p>
            </div>
            <div class="col-lg-6 aligncenter centered">
                <h2>Exceptional Food <span class="italic">from</span> Sirloin to Lobster</h2>
                <a href="http://player.vimeo.com/video/54851233?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff"
                    data-title="Clifton Hotels" data-fancybox-group="group1" class="video-popup round-button"><i
                        class="fa fa-play"></i></a>
            </div>
        </div>
    </section>
    <section class="section" id="section5">
        <div id="ancor5"></div>
        <div class="container clearfix">
            <div class="nautical-5"></div>
            <div class="col-lg-12 centered header-wrapper">
                <h2>Our Deals</h2>
                <p class="large">Get your favorite deals and save big on your next dream vacation.</p>
            </div>
            <div class="col-lg-4 col-md-4"> <img alt="" src="images/blog02.jpg" />
                <figure class="price-table">
                    <div class="heading">
                        <h4>Snorkling for Two</h4>
                    </div>
                    <p class="price"><span>$</span>229</p>
                    <p class="price-details"><span class="line-through">February 12</span> <span
                            class="padding">Fully Booked!</span><br />
                        April 20-21<br />
                        May 4<br />
                        May 15</p>
                    <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4"><img alt="" src="images/blog01.jpg" />
                <figure class="price-table highlighted">
                    <div class="heading">
                        <p class="small">Most Popular</p>
                        <h3>Romantic Getaway</h3>
                    </div>
                    <p class="price"><span>$</span>489</p>
                    <p class="price-details">Free Champagne<br />
                        Roses &amp; Candles<br />
                        Grand Luxury Suite with Beach View<br />
                        Exlusive Boat Trip</p>
                    <a href="#" class="button full-color"><i class="fa fa-shopping-cart"></i> Book Now</a>
                </figure>
            </div>
            <div class="col-lg-4 col-md-4"><img alt="" src="images/blog03.jpg" />
                <figure class="price-table">
                    <div class="heading">
                        <h4>Ulitmate Package</h4>
                    </div>
                    <p class="price"><span>$</span>1.149</p>
                    <p class="price-details">Everything You Need<br />
                        Buffet Included<br />
                        All Drinks and Alcoholic Beverages<br />
                        Fishing Trips</p>
                    <a href="#" class="button"><i class="fa fa-shopping-cart"></i> Book Now</a>
                </figure>
            </div>
        </div>
    </section>
    <section class="section white-bg" id="section6">
        <div id="ancor6"></div>
        <div class="container clearfix">
            <div class="nautical-6"></div>
            <div class="col-lg-12 centered header-wrapper">
                <h2>Contact Us</h2>
                <p class="large">If you have any questions, feedback or would like to book a trip, please contact us.
                    We'll get back to you asap!</p>
            </div>
            <div class="col-lg-3 col-md-3 centered contact-wrapper">
                <div class="icons map-pin-1"></div>
                <p class="small">Address</p>
                <p>Oceanview Dr 103<br />
                    Malé 20292<br />
                    Maldives</p>
            </div>
            <div class="col-lg-3 col-md-3 centered contact-wrapper">
                <div class="icons fax-machine"></div>
                <p class="small">Phone/Fax</p>
                <p>(845) 123-456 0<br />
                    (845) 123-456 78</p>
            </div>
            <div class="col-lg-3 col-md-3 centered contact-wrapper">
                <div class="icons email-2"></div>
                <p class="small">Email</p>
                <p><a href="mailto:info@cliftonhotel.com" title="">info@cliftonhotel.com</a></p>
            </div>
            <div class="col-lg-3 col-md-3 centered contact-wrapper">
                <div class="icons network"></div>
                <p class="small">Social</p>
                <p>Connect with Us:</p>
                <ul class="social-list clearfix">
                    <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-tripadvisor"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-vimeo"></i></a> </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="map-section">
        <div id="map"></div>
        <div id="logo-white"></div>
        <div class="overlay contact-map-overlay"></div>
    </section>
    <!-- end main content -->
    <!-- start footer -->
    <footer>
        <div class="container clearfix">
            <div class="col-lg-12"> <span class="alignleft small">© 2017, Clifton Hotel. All Rights Reserved.</span>
                <span class="alignright small">Made with <i class="fa fa-heart"></i> by <a
                        href="http://www.weibergmedia.com"
                        data-title="Premium HTML5 Website Templates">weibergmedia</a>. </span>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-easing-1.3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.isotope2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/packery-mode.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.isotope.load.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/responsive-nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.form.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/starter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fitvids.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="{{ asset('js/googlemaps.js') }}" type="text/javascript"></script>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</body>

</html>
