<main>
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="{{route('front.index')}}" wire:navigate>Home</a>  /  Schedule A Visit</span>
                    <h3>Schedule A Visit</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading" style="margin-right: 130px">
                        <h6>| Book visit</h6>
                        <h2>Schedule visit with us...</h2>
                    </div>
                    <p>Experience the essence of Swajan Bankers Community firsthand. We invite you to schedule a visit and discover the vibrant, serene, and luxurious environment we offer to our residents.</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item phone">
                                <img src="{{asset('client/assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;">
                                <h6>{{config('app.bankers_phone')}}<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item email">
                                <img src="{{asset('client/assets/images/email-icon.png')}}" alt="" style="max-width: 52px;">
                                <h6>{{config('app.bankers_email')}}<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form id="contact-form" action="" method="post" wire:submit.prevent="contactFormSubmit" autocomplete="off">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
                                    <label for="name">Full Name</label>
                                    <input type="text" wire:model="name" id="name" placeholder="Your Name..." class="mb-0">
                                    @error('name')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
                                    <label for="email">Email Address</label>
                                    <input type="text" wire:model="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." class="mb-0">
                                    @error('email')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" wire:model="phone" id="phone" placeholder="Your Phone No..." class="mb-0">
                                    @error('phone')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
                                    <label for="date">Visit Date</label>
                                    <input type="date" wire:model="date" id="date" placeholder="Your Visit Date..." class="mb-0" >
                                    @error('date')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
                                    <label for="message">Message</label>
                                    <textarea wire:model="message" id="message" placeholder="Your Message" class="mb-0"></textarea>
                                    @error('message')
                                    <span class="text-danger fs-14">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="mb-4">
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
                <div class="col-lg-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d290391.01532036776!2d72.96094972138073!3d22.09755798635219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fb900312d1a83%3A0xa493a2ab87a48293!2sSwajan!5e0!3m2!1sen!2sin!4v1720255994430!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
