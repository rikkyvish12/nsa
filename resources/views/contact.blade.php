
@extends('layouts.front.header')
@section('content')
    <!-- Header Area End -->
    
    
    <!-- Breadcromb Area Start -->
    <section class="kick-breadcromb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h2>contact us</h2>
                        <ul>
                            <li><a href="#"><i class="fa fa-home"></i> home</a></li>
                            <li>/</li>
                            <li>contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    
    
    <!-- Map Canvas Start -->
    <div id="map-canvas" class="map-canvas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30150.59211961607!2d72.97720478607815!3d19.15917920931207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bf523dd8b5ab%3A0x9de9a7f73961da61!2sAiroli%2C%20Navi%20Mumbai%2C%20Maharashtra%20400708!5e0!3m2!1sen!2sin!4v1678083317694!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map Canvas End -->
    
    
    <!-- Contact Form Area Start -->
    <section class="kick-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-form">
                        <div class="contact-heading">
                            <h3>get in touch</h3>
                            <p>Our experts will reply you very soon</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-4">
                                    <p>
                                        <input type="text" name="name" placeholder="Your Name" >
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <input type="email" name="email" placeholder="Your Email" >
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <input type="tel" name="phone" placeholder="Your Phone Number" >
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <textarea name="Message" placeholder="Write Your Message" ></textarea>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="contact-form-button">
                                        <button type="submit" name="submit" >Send message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area End -->
    
    
    <!-- Contact Page Area Start -->
    <section class="kick-contact-page-area section_t_100  section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-address">
                        <h3>Mumbai, India</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>A/61, Sector No.3, Airoli, Navi Mumbai 400708</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>+91 9967143767</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>nsaindia123@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="single-contact-address">
                        <h3>Bolton, UK</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>+44 123 456 788 - 9</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>info@domain.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-contact-address">
                        <h3>Warrington, UK</h3>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <p>123 Eccles Old Road, New Salford Road London, Uk, M6 7AF</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>+44 123 456 788 - 9</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>info@domain.com</p>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Contact Page Area End -->
    
    

    @include('layouts.front.footer')
    @endsection