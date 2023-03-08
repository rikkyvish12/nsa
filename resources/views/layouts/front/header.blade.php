<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themescare.com/demos/kick-view/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Feb 2023 13:25:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>National Sports Academy</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" href="frontassets/favicons/apple-touch-icon.png">
    
    <link rel="icon" type="image/png" sizes="32x32" href="frontassets/img/loog.png">
    
    <link rel="icon" type="image/png" sizes="16x16" href="frontassets/img/loog.png">
    
    <link rel="manifest" href="frontassets/favicons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontassets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="frontassets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="frontassets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="frontassets/css/owl.carousel.css">
    
    <!-- SlickNav CSS -->
    <link rel="stylesheet" href="frontassets/css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="frontassets/css/magnific-popup.css">
    
    <!-- Scroll CSS -->
    <link rel="stylesheet" href="frontassets/css/perfect-scrollbar.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="frontassets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="frontassets/css/responsive.css">

    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>

</head>


<body>

    
    <!-- Header Area Start -->
    <section class="kick-header-area">
        <div class="header-top-area">
            <div class="header-top-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="header-top-left">
                            <div class="dropdown">
                                <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur" data-toggle="dropdown" aria-haspopup="true">
                                IN
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                                    <li>USD</li>
                                  
                                    <li>UK</li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                                English
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                    <li>English</li>
                                    <li>French</li>
                                    <li>Arabic</li>
                                    <li>Chinese</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="header-top-right">
                            
                          
                            <a href="tel:9967143767">
                                <i class="fa fa-phone"> </i>
                                   9967143767
                            </a>
                            <a href="#">
                                <i class="fa fa-sign-in"></i>
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mainmenu-area">
            <div class="container">
                <div class="kick-desktop-menu">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu-left pull-left">
                                <nav>
                                    <ul id="navigation_menu">
                                        <li class="current-page-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about') }}">about</a>
                                        </li>
                                      
                                        <li>
                                            <a href="{{ route('gallery') }}">gallery</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="kick-site-logo">
                                <div class="responsive-menu-2"></div>
                                <a href="index-2.html" class="kick-site-logo">
                                    <img src="frontassets/img/loog.png" alt="site logo" />
                                </a>
                                <div class="responsive-menu-1"></div>
                            </div>
                            <div class="mainmenu-left second-menu">
                                <nav>
                                    <ul id="navigation_menu_2">

                                        <li>
                                            <a href="{{ route('services') }}">Events</a>
                                            
                                        </li>
                                       
                                        <li>
                                            <a href="{{ route('services') }}">Services</a>
                                            
                                        </li>
                                       
                                        <li>
                                            <a href="{{ route('contact') }}">contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('content')