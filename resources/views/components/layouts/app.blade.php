<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    @if(config('app.env') == 'production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZZ7HLP9ZFS"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZZ7HLP9ZFS');
        </script>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>{{ $title ?? 'Swajan :: Bankers Community' }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('client/assets/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('client/assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('client/assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('client/assets/favicon/site.webmanifest')}}">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('client/assets/plugins/bootstrap/css/bootstrap.min.css')}}?v=1.3" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('client/assets/css/fontawesome.css')}}?v=1.3">
    <link rel="stylesheet" href="{{asset('client/assets/css/style.css')}}?v=1.3">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.css')}}?v=1.3">
    <link rel="stylesheet" href="{{asset('client/assets/css/animate.css')}}?v=1.3">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('client/assets/css/magnific-popup.min.css')}}?v=1.3">

    @livewireStyles

    <script src="{{asset('client/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('client/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
{{--        <div class="sub-header">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 col-md-8">--}}
{{--                        <ul class="info">--}}
{{--                            <li><i class="fa fa-envelope"></i>{{config('app.bankers_email')}}</li>--}}
{{--                            <li><i class="fa fa-location-pin"></i>{{config('app.bankers_address')}}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-4">--}}
{{--                        <ul class="social-links">--}}
{{--                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>--}}
{{--                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="containers">
        <div class="row">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a class="navbar-brand ms-lg-5 ms-4 ms-sm-3" href="{{route('front.index')}}" style="" wire:navigate>
                    <img src="{{asset('client/assets/images/logo.svg')}}" alt="" class="logoImg">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav rs-nav">
                    <li><a wire:navigate href="{{route('front.index')}}" class="{{ Request::routeIs('front.index') ? 'active' : '' }}">Home</a></li>
                    <li><a wire:navigate href="{{route('front.about-us')}}" class="{{ Request::routeIs('front.about-us') ? 'active' : '' }}">About Us</a></li>
                    <li><a wire:navigate href="{{route('front.gallery')}}" class="{{ Request::routeIs('front.gallery') ? 'active' : '' }}">Gallery</a></li>
                    <li><a wire:navigate href="{{route('front.facilities')}}" class="{{ Request::routeIs('front.facilities') ? 'active' : '' }}">Facilities</a></li>
                    <li><a href="{{asset('swajan-brochure.pdf')}}" download="">Brochure</a></li>
                    <li><a wire:navigate href="{{route('front.faq')}}" class="{{ Request::routeIs('front.faq') ? 'active' : '' }}">FAQ</a></li>
                    <li><a wire:navigate href="{{route('front.contact-us')}}" class="{{ Request::routeIs('front.contact-us') ? 'active' : '' }}">Contact Us</a></li>
                </ul>
                <a class='menu-trigger'>
                    <span>Menu</span>
                </a>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

{{ $slot }}
<a wire:navigate href="{{route('front.schedule-visit')}}"><img src="{{asset('client/assets/images/appointment.png')}}" alt="" srcset="" class="appointment">
</a>
<a href="https://wa.me/919601257566/"><img src="{{asset('client/assets/images/whatsapp.svg')}}" alt="" srcset="" class="whatsapp">
</a>
<a href="javascript:void(0)">
    <img src="{{asset('client/assets/images/arrow.png')}}" id="backToTop">
</a>

<footer class="py-sm-3 py-md-4 py-xl-6 bg-light mb-0" style="padding-bottom: 0px !important; background: radial-gradient(343px at 46.3% 47.5%, rgb(242, 242, 242) 0%, rgb(241, 241, 241) 72.9%);">
    <div class="container py-3 py-md-6 py-xl-9 py-xxl-10">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="py-4 py-md-5 py-xl-8">
                    <div class="container-fluid overflow-hidden">
                        <div class="row gy-4 gy-lg-0 justify-content-xl-between">
                            <div class="col-12 col-md-3">
                                <div class="widget d-flex justify-content-center">
                                    <a href="{{route('front.index')}}" wire:navigate>
                                        <img src="{{asset('client/assets/images/logo-v.svg')}}" style="width: 100px">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title text-swajan mb-4">Explore</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="{{route('front.index')}}" wire:navigate class="link-secondary text-decoration-none">Home</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{route('front.gallery')}}" wire:navigate class="link-secondary text-decoration-none">Gallery</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{route('front.facilities')}}" wire:navigate class="link-secondary text-decoration-none">Facilities</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{route('front.faq')}}" wire:navigate class="link-secondary text-decoration-none">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title text-swajan mb-4">Download</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <a href="{{asset('swajan-brochure.pdf')}}" download="" class="link-secondary text-decoration-none">Brochure</a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="{{asset('RERA-Certificate-Swajan.pdf')}}" download="" class="link-secondary text-decoration-none">RERA Certificate</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title text-swajan mb-4">Contact Us</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2" style="display: table;">
                                            <a href="https://maps.app.goo.gl/sJCVRUpCZh1LZVYDA" target="_blank" class="link-secondary text-decoration-none">
                                                <span class="fa fa-location-arrow" style="display: table-cell; width: 35px"></span>
                                                <span class="" style="display: table-cell">{{config('app.bankers_address')}}</span>
                                            </a>
                                        </li>
                                        <li class="mb-2" style="display: table;">
                                            <a href="tel:{{str_replace(' ', '', config('app.bankers_phone'))}}" class="link-secondary text-decoration-none">
                                                <span class="fa fa-phone" style="display: table-cell; width: 35px"></span>
                                                <span class="" style="display: table-cell">{{config('app.bankers_phone')}}</span>
                                            </a>
                                        </li>
                                        <li class="mb-2" style="display: table;">
                                            <a href="mailto:{{config('app.bankers_email')}}" class="link-secondary text-decoration-none">
                                                <span class="fa fa-envelope" style="display: table-cell; width: 35px"></span>
                                                <span class="" style="display: table-cell">{{config('app.bankers_email')}}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Copyright - Bootstrap Brain Component -->
                <div class="py-4 border-top border-light-subtle" style="border-color: #d5d5d5 !important">
                    <div class="container-fluid overflow-hidden">
                        <div class="row gy-4 gy-md-0 align-items-md-center">
                            <div class="col-xs-12 col-md-7 order-1 order-md-0">
                                <div class="copyright text-center text-md-start">
                                    &copy; 2024. All Rights Reserved.
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-5 order-0 order-md-1">
                                <div class="social-media-wrapper">
                                    <ul class="list-unstyled m-0 p-0 d-flex justify-content-center justify-content-md-end">
                                        <li class="me-3">
                                            <a href="#!" class="link-dark link-opacity-75-hover">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="me-3">
                                            <a href="#!" class="link-dark link-opacity-75-hover">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="me-3">
                                            <a href="#!" class="link-dark link-opacity-75-hover">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#!" class="link-dark link-opacity-75-hover">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{asset('client/assets/js/isotope.min.js')}}"></script>
<script src="{{asset('client/assets/js/owl-carousel.js')}}"></script>
<script src="{{asset('client/assets/js/counter.js')}}"></script>
<script src="{{asset('client/assets/js/custom.js')}}"></script>
<script src="{{asset('client/assets/js/jquery-magnific-popup.min.js')}}"></script>
<script src="{{asset('client/assets/js/wow.min.js')}}"></script>
<script>

    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#backToTop').fadeIn();
        } else {
            $('#backToTop').fadeOut();
        }
    });

    // Scroll to top when the button is clicked
    $('#backToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 });
        return false;
    });

    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
            }
        }
    );
    wow.init();
</script>
@livewireScripts
@if(Request::routeIs('front.index'))
    <script>
        document.getElementById('video-thumbnail').addEventListener('click', function () {
            const videoContainer = document.getElementById('video-container');
            videoContainer.innerHTML = '<iframe width="100%" height="500" src="{{asset('client/assets/videos/Swajan_View.mp4')}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        });
        document.getElementById('play-button').addEventListener('click', function () {
            const videoContainer = document.getElementById('video-container');
            videoContainer.innerHTML = '<iframe width="100%" height="500" src="{{asset('client/assets/videos/Swajan_View.mp4')}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        });
    </script>
@endif

@if(Request::routeIs('front.gallery'))
    <script>
        document.addEventListener('livewire:navigated', function() {
            $('.properties-box').magnificPopup({
                delegate: 'a',
                gallery: {
                    enabled: true,
                    preload: [0,1]
                },
                callbacks: {
                    elementParse: function(item) {
                        if (item.el.attr('data-type') === 'video') {
                            item.type = 'iframe';
                        } else {
                            item.type = 'image';
                        }
                    }
                },
                image: {
                    titleSrc: function(item) {
                        return item.el.find('.caption').text();
                    }
                },
                iframe: {
                    patterns: {
                        video: {
                            index: '', // Regular expression used to determine if the link is a video
                            id: function(url) {
                                return url;
                            },
                            src: '%id%' // URL with %id% replaced by the captured group from the id function
                        }
                    }
                }
            });
        });
    </script>
@endif

<script>
    $(document).ready(function () {
        $('.properties-box').magnificPopup({
            delegate: 'a',
            gallery: {
                enabled: true,
                preload: [0,1]
            },
            callbacks: {
                elementParse: function(item) {
                    if (item.el.attr('data-type') === 'video') {
                        item.type = 'iframe';
                    } else {
                        item.type = 'image';
                    }
                }
            },
            image: {
                titleSrc: function(item) {
                    return item.el.find('.caption').text();
                }
            },
            iframe: {
                patterns: {
                    video: {
                        index: '', // Regular expression used to determine if the link is a video
                        id: function(url) {
                            return url;
                        },
                        src: '%id%' // URL with %id% replaced by the captured group from the id function
                    }
                }
            }
        });
    });

</script>
</body>
</html>