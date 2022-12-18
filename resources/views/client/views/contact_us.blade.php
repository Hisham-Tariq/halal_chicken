@extends('client/layouts.default')

@section('content')

<!--====Breadcumb
============================== -->
    <div class=" " data-bg-src="assets/halalchickenimages/banners/banner5.jpg">
        <div class="breadcumb-wrapper" style="background-color: rgba(0,0,0,0.6)">
            <div class="container z-index-common">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title text-white">Contact <span class="font-style text-theme2">Us</span></h1>
                    <ul class="breadcumb-menu text-white">
                        <li><a href="index.html" class="text-white">Home</a></li>
                        <li class="text-white">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Map Area  
==============================-->
    <div class="space" style="background-color: rgba(0, 0, 0, 0.9)">
        <div class="container">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!--==============================
Contact Area  
==============================-->
    <div data-pos-for="#contactFormSec" data-sec-pos="" style="background-color: rgba(0,0,0,1);">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="contact-info" data-bg-src="assets/halalchickenimages/discountsimage/aboutus.png">
                        <div class="contact-info_icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <h4 class="contact-info_title box-title text-black" style="color: black !important;">Phone</h4>
                        <span class="contact-info_text" style="color: black !important;">
                            <a href="tel:+65485965789" style="color: black !important;" >(+65) - 48596 - 5789</a>
                            <a href="tel:+65485965789" style="color: black !important;">+65-48596-5789</a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info" data-bg-src="assets/halalchickenimages/discountsimage/aboutus.png">
                        <div class="contact-info_icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <h4 class="contact-info_title box-title" style="color: black !important;">Email</h4>
                        <span class="contact-info_text">
                            <a href="mailto:info@pizzer.com" style="color: black !important;">info@pizzer.com</a>
                            <a href="mailto:info.example@gmail.com" style="color: black !important;">info.example@gmail.com</a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info" data-bg-src="assets/halalchickenimages/discountsimage/aboutus.png">
                        <div class="contact-info_icon">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <h4 class="contact-info_title box-title" style="color: black !important;">Location</h4>
                        <span class="contact-info_text" style="color: black !important;">1403 Washington Ave, New Orlea <br> ns, LA 70130, United States</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="contactFormSec" data-bg-src="assets/halalchickenimages/banners/foodbanner4.jpg">
       <div class="space"   style="background-color: rgba(0,0,0,0.8)">
        <div class="container" >
            <form action="mail.php" method="POST" class="contact-form ajax-contact" style="background-color: black">
                <h3 class="form-title">Get In Touch</h3>
                <div class="row">
                    <div class="form-group col-md-6" >
                        <input style="background-color: rgba(115, 115, 115, 0.6)" type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input style="background-color: rgba(115, 115, 115, 0.6)" type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-md-6">
                        <input style="background-color: rgba(115, 115, 115, 0.6)" type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                        <i class="fal fa-phone"></i>
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <select style="background-color: rgba(115, 115, 115, 0.6)" name="subject" id="subject" class="form-select">
                            <option value="" disabled selected hidden>Select Service</option>
                            <option value="Reservation For Birthday">Reservation For Birthday</option>
                            <option value="Book A Table">Book A Table</option>
                            <option value="Food Pre-order">Food Pre-order</option>
                            <option value="Request a Quote">Request a Quote</option>
                        </select>
                        <i class="fal fa-chevron-down"></i>
                    </div> --}}
                    <div class="form-group col-12">
                        <textarea style="background-color: rgba(115, 115, 115, 0.6)" name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                        <i class="fal fa-comment"></i>
                    </div>
                    <div class="form-btn text-center col-12">
                        <button class="as-btn">Submit Message</button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
       </div>

    </section>

@stop
