<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Swajan::Bankers Community - Enjoy Life, Ageing is An Adventure</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('client/assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('client/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('client/assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('client/assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('client/assets/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('client/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('client/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="info">
                    <li><i class="fa fa-envelope"></i>{{config('app.bankers_email')}}</li>
                    <li><i class="fa fa-location-pin"></i>{{config('app.bankers_address')}}</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('front.index')}}" class="logo">
                        <h1 class="text-swajan">Swajan</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{route('front.index')}}" class="active">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Property Details</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Brochure</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text">
                <span class="category">Toronto, <em>Canada</em></span>
                <h2>Hurry!<br>Get the Best Villa for you</h2>
            </div>
        </div>
        <div class="item item-2">
            <div class="header-text">
                <span class="category">Melbourne, <em>Australia</em></span>
                <h2>Be Quick!<br>Get the best villa in town</h2>
            </div>
        </div>
        <div class="item item-3">
            <div class="header-text">
                <span class="category">Miami, <em>South Florida</em></span>
                <h2>Act Now!<br>Get the highest level penthouse</h2>
            </div>
        </div>
    </div>
</div>

<div class="featured section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image">
                    <img src="{{asset('client/assets/images/old-age-feature.jpg')}}" alt="">
                    <a href="property-details.html"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-heading">
                    <h6>| Explore Life At Swajan</h6>
                    <h2>Why Swajan?</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What sets different from other senior living communities?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Swajan offers luxurious amenities, comprehensive healthcare services, and a commitment to sustainability, providing an exceptional living experience.
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to ensure resident safety?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We have 24/7 CCTV surveillance, a vigilant security team, and thorough background checks for all staff members to ensure a secure environment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What amenities can residents enjoy at Swajan?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Residents can enjoy a swimming pool, gym, library, community hall, yoga and meditation room, and various recreational activities and cultural programs.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="info-table">
                    <ul>
                        <li>
                            <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                            <h4>3142 SQ FT<br><span>Built Up</span></h4>
                        </li>
                        <li>
                            <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                            <h4>Elevators<br><span>Yoga & Meditation</span></h4>
                        </li>
                        <li>
                            <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                            <h4>Logistics<br><span>Support Available</span></h4>
                        </li>
                        <li>
                            <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                            <h4>Safety<br><span>24/7 Security</span></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Video View</h6>
                    <h2>Get Closer View & Different Feeling</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="video-frame">
                    <img src="assets/images/video-frame.jpg" alt="">
                    <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                <p class="count-text ">Buildings<br>Finished Now</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                <p class="count-text ">Years<br>Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                <p class="count-text ">Awwards<br>Won 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section best-deal">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>| Best Deal</h6>
                    <h2>Find Your Best Deal Right Now!</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content">
                    <div class="row">
                        <div class="nav-wrapper ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab" data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment" aria-selected="true">Appartment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>185 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>4</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-01.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Property</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                                            <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>250 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>5</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-02.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Detail Info About Villa</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>320 m2</span></li>
                                                <li>Floor number <span>34th</span></li>
                                                <li>Number of rooms <span>6</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-03.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Penthouse</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Contact Us</h6>
                    <h2>Book Your Dream Life!</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59071.24495832782!2d73.06637367982519!3d22.279777353299014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fb900312d1a83%3A0xa493a2ab87a48293!2sSwajan!5e0!3m2!1sen!2sin!4v1719514905854!5m2!1sen!2sin" loading="lazy" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item phone">
                            <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                            <h6>{{config('app.bankers_phone')}}<br><span>Phone Number</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item email">
                            <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                            <h6>test@gmail.com<br><span>Business Email</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form id="contact-form" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Subject</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>Copyright © 2024 Swajan. All rights reserved.
                Design: <a rel="nofollow" href="https://sachinsanchania.com" target="_blank">Sachin Sanchania</a></p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('client/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('client/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('client/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('client/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('client/assets/js/counter.js')}}"></script>
<script src="{{asset('client/assets/js/custom.js')}}"></script>

</body>
</html>
