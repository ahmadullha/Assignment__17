<!DOCTYPE html>
<html lang="en">
<head>
    <!-- /Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home | RRDevs</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:ital,wght@0,500;0,600;0,700;1,400&family=Roboto" rel="stylesheet">
    <!-- /All css plugins -->  
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- /Scroll to Top -->
    <a id="scrollToTop" class="btn d-flex align-items-center justify-content-center"><i class="icon-arrow-up"></i></a>

    <div id="load">
        <svg>
            <g> <path d="M 50,100 A 1,1 0 0 1 50,0"></path> </g> <g> <path d="M 50,75 A 1,1 0 0 0 50,-25"></path> </g> <defs> <lineargradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%"> <stop offset="0%" style="stop-color:#FC5C7D;stop-opacity:1"></stop> <stop offset="100%" style="stop-color:#4441C2;stop-opacity:1"></stop> </lineargradient> </defs>
        </svg>
    </div><!-- /page load animation -->

    <div id="sidr">
        <div class="mobile-header d-none">
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid" alt="logo">
                    </a>
                </div>

                <button class="navbar-toggle in" type="button">
                    <span class="icon-bar"><span class="inner"></span></span>
                    <span class="icon-bar"><span class="inner"></span></span>
                    <span class="icon-bar"><span class="inner"></span></span>
                </button>
            </div>

            <div class="navigation">
                <ul class="navbar-nav">
                    <li><a href="index.html">Home</a></li> 
                    <li><a href="about.html">About</a></li> 
                    <li><a href="services.html">Service</a></li> 
                    <li><a href="portfolio.html">Portfolio</a></li> 
                    <li><a href="contact.html">Contact</a></li>
                    <li class="btn-menu"><a href="#">Get A Quote</a></li>   
                </ul>
            </div>
        </div>
    </div><!-- /mobile-header -->
    
    <header class="header">
        <nav class="navbar navbar-expand">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="navbar-header">
                    <div class="logo">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets/images/logo.svg') }}" class="img-fluid svg" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li><a href="index.html">Home</a></li> 
                        <li><a href="about.html">About</a></li> 
                        <li><a href="services.html">Service</a></li> 
                        <li><a href="portfolio.html">Portfolio</a></li> 
                        <li><a href="contact.html">Contact</a></li>
                        <li class="active"><a href="/posts">Posts</a></li>
                    </ul>

                    <ul class="navbar-nav navbar-right">
                        <li class="btn-menu"><a href="#">Get A Quote</a></li>    
                        <li class="mobile-navbar-toggler">
                            <button class="navbar-toggle" type="button">
                                <span class="icon-bar"><span class="inner"></span></span>
                                <span class="icon-bar"><span class="inner"></span></span>
                                <span class="icon-bar"><span class="inner"></span></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><!-- /nav -->
    </header><!-- /header -->

    <div class="header-gutter"></div>

    @yield('content')

    <footer class="footer">
        <div class="container"> 
            <div class="row">
                <div class="col-xl-4">
                    <div class="footer__text"> 
                        <a href="index.html" class="footer__logo" data-aos="fade-right">
                            <img src="{{ asset('assets/images/footer-logo.svg') }}" class="img-fluid svg" alt="">
                        </a> 

                        <div data-aos="fade-right" data-aos-delay="100">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>
                        </div>

                        <ul class="footer__social-media list-unstyled d-xl-block d-none" data-aos="fade-right" data-aos-delay="200"> 
                            <li><a href="#" class="icon-facebook" target="_blank"></a></li>
                            <li><a href="#" class="icon-twitter" target="_blank"></a></li>
                            <li><a href="#" class="icon-linkedin" target="_blank"></a></li>
                            <li><a href="#" class="icon-youtube" target="_blank"></a></li>
                        </ul> 
                    </div>
                </div>

                <div class="col-xl-8"> 
                    <div class="footer__widget d-flex flex-row flex-wrap justify-content-between">
                        <ul class="footer__widget-menu list-unstyled" data-aos="fade-right">
                            <li class="title"><a href="#">Quick Links</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact Us</a></li> 
                        </ul>  

                        <ul class="footer__widget-menu list-unstyled" data-aos="fade-right" data-aos-delay="100">
                            <li class="title"><a href="services.html">Our Services</a></li>
                            <li><a href="#">WordPress Development</a></li>
                            <li><a href="#">Woocommerce Development</a></li> 
                            <li><a href="#">WordPress Customaization</a></li> 
                            <li><a href="#">Front End Development</a></li> 
                            <li><a href="#">Site Speed Optimization</a></li> 
                            <li><a href="#">Responsive Design</a></li>
                        </ul>   
                      
                        <ul class="footer__widget-menu list-unstyled" data-aos="fade-right" data-aos-delay="200">
                            <li class="title"><a href="#">Our Features</a></li>
                            <li><a href="#">100% Responsive Design</a></li>
                            <li><a href="#">Pixel Perfect Design</a></li> 
                            <li><a href="#">Modern Design</a></li>
                            <li><a href="#">Creatives Services</a></li>
                            <li><a href="#">Super Fast Delivery</a></li>
                            <li><a href="#">24-7 Quick Services</a></li>
                        </ul>  
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <ul class="footer__social-media list-unstyled d-xl-none text-center" data-aos="fade-right" data-aos-delay="200"> 
                        <li><a href="#" class="icon-facebook" target="_blank"></a></li>
                        <li><a href="#" class="icon-twitter" target="_blank"></a></li>
                        <li><a href="#" class="icon-linkedin" target="_blank"></a></li>
                        <li><a href="#" class="icon-youtube" target="_blank"></a></li>
                    </ul>

                    <div class="footer__copyright text-center color-white font-mon">
                        <p>Copyright 2022 &copy; <strong>RRDevs-All Right Reserved</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- /footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>