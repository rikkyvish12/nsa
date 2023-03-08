
@extends('layouts.front.header')
@section('content')

    <!-- Header Area End -->
    
    
    <!-- Slider Area Start -->
    <section class="kick-slider-area">
        <div class="kick-slide">
            <div class="kick-main-slide slide-item-1">
                <div class="kick-main-caption">
                    <div class="kick-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>National Sports Academy</h2>
                                    <p>Friday, 10th Sep, 2018, 16:00GMT</p>
                                    <a href="#" class="kick-btn">
                                        buy tickets now
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kick-main-slide slide-item-2">
                <div class="kick-main-caption">
                    <div class="kick-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2>kika Semi Finals at city stadium</h2>
                                    <p>Friday, 10th Sep, 2018, 16:00GMT</p>
                                    <a href="#" class="kick-btn">
                                        buy tickets now
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    
    
    <!-- About Area Start -->
    <section class="kick-about-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="kick-about-right">
                        <div class="kick-section-heading">
                            <h2>Welcome to<span> National Sports Academy</span></h2>
                            <div class="title-line-one"></div>
                            <div class="title-line-two"></div>
                        </div>
                        <p>
                            National Sports Academy (NSA) is a leading multi-solutions provider of
                            specially in Sports, Sports Education, Sports Development and Event
                            Management. We are one of the most promising multi-sports cultural
                            disciplined organisation in the India operating from its original permanent base
                            in Mumbai.
                        </p>
                        <p>
                            NSA is fully committed to high-quality performance to ensure customer
                            satisfaction.Our approach to business in partnership-our clients and
                            employees working together to achieve project/contract/business objectives in
                            mutually beneficial manner
                        </p><br>
                        <p>
                            Our main emphasis is on properly managing scope , schedule, budgets and
                            quality.
                            We conduct our business in line with best practices and with integrity and
                            honesty. Continues improvement is a way of life at NSA and underlines our
                            commitment to be the best service provider to our valued clients
                        </p>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-grav"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>training capacity</h3>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-trophy"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>winning history</h3>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>match history</h3>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-about-right">
                                    <div class="single-about-right-con">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="single-about-right-text">
                                        <h3>team member</h3>
                                        <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis.</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kick-about-left">
                        <img src="frontassets/img/frontimg.jpg" alt="about player" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    
    <!-- Last Match Result Area Start -->
    <section class="kick-last-match-result section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>List Of <span>Sports We are into</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="last-match-box">
                    <div class="col-md-5">
                        <div class="last-match-result-one last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">Olympic Sports</h3>
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="#"> (Outdoor)</a>
                                    </h3>
                                    <ul>
                                        <li><p>Athletics</p><span>Rugbdy</span></li>
                                        <li><p>Football</p><span>Handball</span></li>
                                        <li><p>Hockey</p><span>Baseball & Softbal</span></li>
                                        <li><p>Shooting</p><span>Archery</span></li>
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="#"><img src="frontassets/img/loog.png" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <div class="last-match-score">
                            <h2>2 <span class="devider">/</span> <span class="lose-point">4</span> </h2>
                        </div> --}}
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">Olympic Sports</h3>
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                        <a href="#"><img src="frontassets/img/loog.png" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="#">
                                            (Indoor)
                                        </a>
                                    </h3>
                                    <ul>
                                        <li><p>Gymnastic</p><span>Volleyball</span></li>
                                        <li><p>Table Tennis</p><span>Lawn Tennis</span></li>
                                        <li><p>Badminton</p><span>Boxing</span></li>
                                        <li><p>Squash</p><span>Fencing</span></li>
                                        <li><p>Swimming</p><span></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="last-match-box">
                    <div class="col-md-5">
                        <div class="last-match-result-one last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">Other Sports</h3>
                                <div class="result-details">
                                    <h3 class="result-details-left">
                                        <a href="#"> (Outdoor)</a>
                                    </h3>
                                    <ul>
                                        <li><p>Cricket</p><span>Dodge ball</span></li>
                                        <li><p>Skating</p><span>Soft Tennis</span></li>
                                        <li><p>Chess</p><span>Baseball & Softbal</span></li>
                                        <li><p>Netball</p><span>Tug of War</span></li>
                                    </ul>
                                    <div class="last-match-logo">
                                        <a href="#"><img src="frontassets/img/loog.png" alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{-- <div class="last-match-score">
                            <h2>2 <span class="devider">/</span> <span class="lose-point">4</span> </h2>
                        </div> --}}
                    </div>
                    <div class="col-md-5">
                        <div class="last-match-result-two last-match-result">
                            <div class="col-md-12">
                                <h3 class="result">Indian Sports</h3>
                                <div class="result-details">
                                    <div class="last-match-logo-right">
                                        <a href="#"><img src="frontassets/img/loog.png" alt="logo" /></a>
                                    </div>
                                    <h3 class="result-details-right">
                                        <a href="#">
                                            Goa Fotball Federation
                                        </a>
                                    </h3>
                                    <ul>
                                        <li><p>Throw ball</p><span>Mallkhamb</span></li>
                                        <li><p>Kho-Kho</p><span>Tennis Ball Cricket</span></li>
                                        <li><p>Kabbaddi</p><span>Traditional Games</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--             
            <div class="row">
                <div class="view-all-result">
                    <a href="#" class="kick-btn">view all Events</a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Last Match Result Area End -->
    
    
    <!-- Upcoming Matches Area Start -->
    <section class="kick-upcoming-mathces-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Our <span>Services</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="upcoming-slider">

                        
                            <div class="single-upcoming-match">
                                <h3>Services</h3>
                                <p>10th sep<span>2023</span></p>
                                <div class="upcoming-match-box">
                                    <h4>Sports Event Management</h4>
                                    {{-- <p>Friday, 10th Sep, 2016, 16:00GMT</p> --}}
                                    <div class="upcoming-teams-head">
                                        <div class="row">
        
                                            <div class="">
                                                <div style="margin-left:25%">
                                                    <a href="#">
                                                        <img src="frontassets/img/loog.png" alt="team image" />
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="upcoming-match-btn">
                                        <a href="#" class="kick-btn">view more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-upcoming-match">
                                <h3>Services</h3>
                                <p>10th sep<span>2023</span></p>
                                <div class="upcoming-match-box">
                                    <h4>Trainig Program Long and Short Duration</h4>
                                    {{-- <p>Friday, 10th Sep, 2016, 16:00GMT</p> --}}
                                    <div class="upcoming-teams-head">
                                        <div class="row">
        
                                            <div class="">
                                                <div style="margin-left:25%">
                                                    <a href="#">
                                                        <img src="frontassets/img/loog.png" alt="team image" />
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="upcoming-match-btn">
                                        <a href="#" class="kick-btn">view more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-upcoming-match">
                                <h3>Services</h3>
                                <p>10th sep<span>2023</span></p>
                                <div class="upcoming-match-box">
                                    <h4>Schools Coaching Programs</h4>
                                    {{-- <p>Friday, 10th Sep, 2016, 16:00GMT</p> --}}
                                    <div class="upcoming-teams-head">
                                        <div class="row">
        
                                            <div class="">
                                                <div style="margin-left:25%">
                                                    <a href="#">
                                                        <img src="frontassets/img/loog.png" alt="team image" />
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="upcoming-match-btn">
                                        <a href="#" class="kick-btn">view more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-upcoming-match">
                                <h3>Services</h3>
                                <p>10th sep<span>2023</span></p>
                                <div class="upcoming-match-box">
                                    <h4>Internationals Sports Tournaments</h4>
                                    {{-- <p>Friday, 10th Sep, 2016, 16:00GMT</p> --}}
                                    <div class="upcoming-teams-head">
                                        <div class="row">
        
                                            <div class="">
                                                <div style="margin-left:25%">
                                                    <a href="#">
                                                        <img src="frontassets/img/loog.png" alt="team image" />
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="upcoming-match-btn">
                                        <a href="#" class="kick-btn">view more</a>
                                    </div>
                                </div>
                            </div>
                    



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming Matches Area End -->
    
    
    <!-- Video Area Start -->
{{-- 
    <section class="kick-video-area section_100">
        <div class="kick-video-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="youtube-text">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=HJ7Yyo8gBuA">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="kick-video-wrap">
                        <h2>club <span>ranking</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                        <div class="kick-score-scroll">
                            <table class="table table-striped table-responsive">
                                <tbody>
                                    <tr>
                                        <td><p>01</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-1.png" alt="rank image" />
                                            <p>Ac milan</p>
                                        </td>
                                        <td><p>122</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>02</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-2.png" alt="rank image" />
                                            <p>Fc Royal</p>
                                        </td>
                                        <td><p>118</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>03</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-3.png" alt="rank image" />
                                            <p>Ninja King</p>
                                        </td>
                                        <td><p>110</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>04</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-4.png" alt="rank image" />
                                            <p>Soccer club</p>
                                        </td>
                                        <td><p>98</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>05</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-5.png" alt="rank image" />
                                            <p>mohamedan</p>
                                        </td>
                                        <td><p>88</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>06</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-6.png" alt="rank image" />
                                            <p>Ac milan</p>
                                        </td>
                                        <td><p>82</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>07</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-7.png" alt="rank image" />
                                            <p>Ac milan</p>
                                        </td>
                                        <td><p>79</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>08</p></td>
                                        <td>
                                            <img src="frontassets/img/rank-8.png" alt="rank image" />
                                            <p>Bengal club</p>
                                        </td>
                                        <td><p>78</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     --}}
    <!-- Video Area End -->
    
    
    
    
    <!-- Match Gallery Area Start -->
    <section class="kick-match-gallery-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Our <span>Gallery</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/1.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/1.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/2.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/2.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/3.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/3.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/4.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/4.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/5.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/5.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-match-gallery">
                       <a href="frontassets/gallery/6.jpg" class="gallery-lightbox">
                            <div class="project-img">
                                <img src="frontassets/gallery/6.jpg" alt="single project" />
                                <div class="single-pro-overlay">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="load-more">
                        <a href="{{ route('gallery') }}" class="kick-btn">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Match Gallery Area End -->
    
    
    <!-- Top Products Area Start -->
    <section class="kick-top-products-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>Our <span> Associates</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="top-product-slider">
                        <div class="single-top-product">
                            <div class="">
                                <a href="#">
                                    <img src="frontassets/img/asso/logo3.jpg" style="max-width:230px" alt="product image" />
                                </a>
                                
                                <div class=""></div>
                            </div>
                            <div class="product-text">
                                <h4><a href="">PSA</a></h4>
                               
                            </div>
                        </div>
                        <div class="single-top-product">
                            <div class="">
                                <a href="#">
                                    <img src="frontassets/img/asso/fisce.jpg" style="max-width:230px" alt="product image" />
                                </a>
                               
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">FISCE</a></h3>
                                
                             
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <a href="#">
                                    <img src="frontassets/img/asso/logo2.webp" style="max-width:230px" alt="product image" />
                                </a>
                             
                                <div class="product-overlay"></div>
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">IYSA</a></h3>
                              
                            </div>
                        </div>
                        <div class="single-top-product">
                            <div class="">
                                <a href="#">
                                    <img src="frontassets/img/asso/logo4.jpg" style="max-width:230px" alt="product image" />
                                </a>
                             
                               
                            </div>
                            <div class="product-text">
                                <h3><a href="single-shop.html">MPFI</a></h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Products Area End -->
    
    
    <!-- Latest Post Area Start -->
    <section class="kick-latest-post-area section_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="kick-section-heading">
                        <h2>latest <span>post</span></h2>
                        <div class="title-line-one"></div>
                        <div class="title-line-two"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-latest-post">
                        <a href="#"><img src="frontassets/gallery/file2.jpg" alt="post image" /></a>
                        <div class="single-post-text">
                            <h3><a href="#">Winner of State Football Championship (Youth)</a></h3>
                            <p class="post-date">11 Aug, 2018 / NSA</p>
                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                            <div class="post-text-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="admin-image">
                                            <img src="frontassets/img/admin.jpg" alt="admin" />
                                            <a href="#">Tarin Smith</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="admin-image-right">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-eye"></i>
                                                    90
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-heart-o"></i>
                                                    228
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment-o"></i>
                                                        432
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
                <div class="col-md-6">
                    <div class="single-latest-post">
                        <a href="#"><img src="frontassets/gallery/13.jpg" alt="post image" /></a>
                        <div class="single-post-text">
                            <h3><a href="#">Closing ceremony of London Olympic -2012</a></h3>
                            <p class="post-date">11 Aug, 2018 / NSA</p>
                            <p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip exea commodo consequat.</p>
                            <div class="post-text-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="admin-image">
                                            <img src="frontassets/img/admin.jpg" alt="admin" />
                                            <a href="#">Michel Smith</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="admin-image-right">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-eye"></i>
                                                    90
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-heart-o"></i>
                                                    228
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comment-o"></i>
                                                        432
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
        </div>
    </section>
    <!-- Latest Post Area End -->
    
    

@include('layouts.front.footer')
@endsection