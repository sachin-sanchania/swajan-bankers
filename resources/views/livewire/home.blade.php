<main>
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="overlay"></div>
                <div class="header-text">
                    <h2 class="rs-header-text">Discover<br>Exceptional Senior Living</h2>
                    <div class="text-white font-light text-lg text-right flex flex-col w-50 rs-slider">
                        <span class="poppins">Experience unparalleled senior living at Swajan Bankers Community.</span>
                        <span>We offer a harmonious blend of luxury, comfort, and comprehensive care. </span>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="overlay"></div>
                <div class="header-text">
                    <h2 class="rs-header-text">Beautifully<br>Designed Homes</h2>
                    <div class="text-white font-light text-lg text-right flex flex-col w-50 rs-slider">
                        <span class="poppins">Our homes are designed to provide the utmost comfort</span>
                        <span>and convenience to our senior residents.</span>
                        <span> With exquisite attention to detail, we take pride in offering the best.</span>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="overlay"></div>
                <div class="header-text">
                    <h2 class="rs-header-text">Green Project<br>Swajan</h2>
                    <div class="text-white font-light text-lg flex flex-col w-50 rs-slider">
                        <span>A harmonious blend of sustainable design and eco-friendly materials,</span>
                        <span>crafting an energy-efficient homes. Embrace solar power, EV amenities,</span>
                        <span>and more for a vibrant, eco-conscious, and joyful future.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="featured section rs-featured">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-image">
                        <img src="{{asset('client/assets/images/old-age-feature.jpeg')}}" alt="">
                        <a href="{{route('front.about-us')}}" wire:navigate><img src="{{asset('client/assets/images/featured-icon.png')}}" alt="" style="max-width: 60px; padding: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-heading mb-3">
                        <h6>| Explore Life At Swajan</h6>
                        <h2 style="font-size: 36px" class="w-100">Searching for luxurious senior care?</h2>
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
                    <div class="video-frame" id="video-container" style="position: relative;">
                        <img src="{{ asset('client/assets/images/video-frame.jpg') }}" alt="Video Thumbnail" id="video-thumbnail" style="width: 100%; cursor: pointer;">
                        <a href="javascript:void(0);" id="play-button" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            <i class="fa fa-play" style="font-size: 48px; color: white;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section best-deal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>| Best Deal</h6>
                        <h2>Find Your Best Villa Right Now!</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper ">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="apartment-tab" data-bs-toggle="tab" data-bs-target="#apartment" type="button" role="tab" aria-controls="apartment" aria-selected="false">Apartment</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('client/assets/images/Swajan_Home_1.jpg')}}" class="d-block w-100 p-0">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('client/assets/images/Swajan_Home_2.jpg')}}" class="d-block w-100 p-0">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('client/assets/images/Swajan_Home_3.jpg')}}" class="d-block w-100 p-0">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{asset('client/assets/images/Swajan_Home_4.jpg')}}" class="d-block w-100 p-0">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h3 class="mb-3">Discovering the Ideal Site</h3>
                                            <p style="text-align: justify" class="fs-16 mb-1">
                                                At Swajan, we meticulously consider every aspect to ensure your retirement is nothing short of perfect, starting with our carefully selected location. We chose a peaceful and affordable setting, adorned with lush greenery, to offer you an oasis of tranquillity. Nestled amidst nature's embrace, our community provides the perfect balance of peace and convenience. Vadodara, one of the safest and best places to retire throughout India, offers a serene environment complemented by modern amenities. Our commitment to excellence is reflected in the thoughtful design of our community.
                                            </p>
                                            <div class="icon-button">
                                                <a wire:navigate href="{{route('front.schedule-visit')}}"><i class="fa fa-calendar"></i> Schedule a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="apartment" role="tabpanel" aria-labelledby="apartment-tab">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div id="carouselExampleApp" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleAppCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{asset('client/assets/images/Appartment_1.jpg')}}" class="d-block w-100 p-0" alt="Apartment">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h3 class="mb-3">Discovering the Ideal Site</h3>
                                            <p style="text-align: justify" class="fs-16 mb-1">
                                                At Swajan, our thoughtfully designed apartments provide the perfect blend of comfort, luxury, and practicality, ensuring that every resident feels right at home. Our apartments are not just living spaces; they are sanctuaries where you can enjoy your golden years in peace and comfort. We prioritize the safety and accessibility of our residents. Each apartment is equipped with emergency call systems, ensuring help is always just a button press away. Additionally, our apartments are designed to be wheelchair-friendly, with features like wide doorways and grab bars in bathrooms.
                                            </p>
                                            <div class="icon-button">
                                                <a wire:navigate href="{{route('front.schedule-visit')}}"><i class="fa fa-calendar"></i> Schedule a visit</a>
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

    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid rounded" loading="lazy" src="{{asset('client/assets/images/event.jpg')}}" style="border-radius: 15px !important;" alt="Event">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <div class="section-heading mb-3">
                                <h6>| Events</h6>
                            </div>
                            <p class="mb-5 fs-16">We are thrilled to announce the upcoming Swajan Bankers Community Event, set to launch soon! Join us for an enriching experience filled with networking opportunities, insightful discussions, and engaging activities.</p>
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="me-4 text-swajan">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-3 text-swajan">Venue</h4>
                                        <address class="mb-0 text-secondary fs-16">Vadodara, Gujarat (India).</address>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="me-4 text-swajan">
                                        <svg width="36px" height="36px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M9 15L11 17L15 13M7 3V5M17 3V5M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#a33443" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </div>
                                    <div>
                                        <h4 class="mb-3 text-swajan">Date</h4>
                                        <p class="mb-0 fs-16">
                                            Launching Soon...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-button my-5 text-end">
                                <a wire:navigate href="{{route('front.contact-us')}}"><i class="fa fa-fire"></i> Join Us / Celebrate Wisdom</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact section" style="margin-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Contact Us</h6>
                        <h2>Experience ultimate home comfort!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d290391.01532036776!2d72.96094972138073!3d22.09755798635219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fb900312d1a83%3A0xa493a2ab87a48293!2sSwajan!5e0!3m2!1sen!2sin!4v1720255994430!5m2!1sen!2sin" loading="lazy" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="{{asset('client/assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;">
                                <h6 style="font-size: 17px">{{config('app.bankers_phone')}}<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="{{asset('client/assets/images/email-icon.png')}}" alt="" style="max-width: 52px;">
                                <h6 style="font-size: 17px">{{config('app.bankers_email')}}<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <form id="contact-form" action="" method="post" wire:submit.prevent="submitHomeForm" autocomplete="off" style="padding-bottom: 10px">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <label for="name">Full Name</label>
                                    <input type="text" wire:model="name" id="name" placeholder="Your Name..." class="mb-0">
                                    @error('name')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <label for="email">Email Address</label>
                                    <input type="text" wire:model="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." class="mb-0">
                                    @error('email')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" wire:model="phone" id="phone" placeholder="Your Phone No..." class="mb-0">
                                    @error('phone')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" wire:model="subject" id="subject" placeholder="Subject..." class="mb-0" >
                                    @error('subject')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <label for="message">Message</label>
                                    <textarea wire:model="message" id="message" placeholder="Your Message" class="mb-0"></textarea>
                                    @error('message')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-3">
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div wire:loading>
                            <span class="text-info fs-14">
                                Submitting form...
                            </span>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
