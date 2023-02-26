
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
    <div id="map-canvas" class="map-canvas"></div>
    <!-- Map Canvas End -->
    
    
    <!-- Contact Form Area Start -->
    <section class="kick-contact-form-area section_100">
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
    <section class="kick-contact-page-area section_t_100 section_b_70">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-contact-address">
                        <h3>Manchester, UK</h3>
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
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Page Area End -->
    
    

    @include('layouts.front.footer')
    @endsection