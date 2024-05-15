@php
    $category = DB::table('categories')->orderBy('id','ASC')->get();
@endphp


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/ticker-style.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slicknav.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/themify-icons.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.css">
            <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
   </head>

   <body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->


    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container">
          <a class="navbar-brand text-white" href="#">NEWS TODAY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                @foreach ($category as $row )
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#">{{ $row->category_bn }}</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link text-white" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
              </li> --}}
              @endforeach

            </ul>
            <form class="d-flex" role="search">
              <div>
                <input class="form-control me-2" type="search" placeholder="search">
              </div>
              <div>
                <button class="btn btn-sm-success"></button>
              </div>

            </form>
          </div>
        </div>
      </nav>




    @yield('content')

<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('frontend') }}/assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
</footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('frontend') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="{{ asset('frontend') }}/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/animated.headline.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.ticker.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.nice-select.min.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="{{ asset('frontend') }}/assets/js/contact.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.form.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.validate.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/mail-script.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{ asset('frontend') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
