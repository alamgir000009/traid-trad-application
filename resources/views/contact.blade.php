@extends('layouts.app-frontend')
@section('content')
<!--==============================
                        Breadcumb
                    ============================== -->
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
                    Contact Area
                    ==============================-->
<div class="space">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-6 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Our Office Address</h4>
                        <span class="contact-info_text">169 Great Portland Street, London, W1W 5PF, United Kingdom.</span>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xl-4 col-md-6 d-none">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Call Us Anytime</h4>
                            <span class="contact-info_text">
                                <a href="tel:+153000000">+153-000-000</a>
                            </span>
                        </div>
                    </div>
                </div> --}}
            <div class="col-xl-6 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Send An Email</h4>
                        <span class="contact-info_text">
                            <a href="mailto:support@triadtradelimited.com">support@triadtradelimited.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
        Contact Area
    ==============================-->
<div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                        </div>contact with us!
                    </span>
                    <h2 class="sec-title">Have Any Questions?</h2>
                    <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business trading.
                        Dramatically reintermediate compelling process improvements rather than empowered relationships.
                    </p>
                </div>
                <form action="{{ route('contact') }}" method="POST" class="contact-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Select Subject</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Brand Marketing">Brand Marketing</option>
                                <option value="UI/UX Designing">UI/UX Designing</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                            </select>
                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                            <i class="fal fa-comment"></i>
                        </div>
                        <div class="form-btn text-xl-start text-center col-12">
                            <button class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
