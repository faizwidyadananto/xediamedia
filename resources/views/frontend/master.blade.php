<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, styles, etc. -->
</head>
<body>
    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>XediaMedia</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{URL::to('frontend/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{URL::to('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{URL::to('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{URL::to('frontend/css/responsive.css')}}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="images/handphone1.jpg" alt="">
    </div>
    <!-- header section starts -->
    <header class="header_section" id='home'>
      <div class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <a href="https://www.google.com/maps?q=(7°02′23.6″S 110°27′21.0″E)" target="_blank">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location, No B07
              </span>
            </a>
            <a href="https://wa.me/6282328713200" target="_blank">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Whatsapp : +62 819-4760-0907
              </span>
            </a>
            <a href="mailto:Xedia.media@gmail.com" target="_blank">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Xedia.media@gmail.com
              </span>
            </a>
          </div>
          <div class="social_box">
            <a href="https://www.tiktok.com/@xediamedia" target="_blank">
              <i class="fa fa-music" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/xediamedia" target="_blank">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="">
        <div class="logo-container">
      <img src="images/logo.png" alt="Logo" class="logo">
</div>
        XediaMedia
      </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('#home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('#services') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('#about') }}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('#layanan') }}">Services</a>
                </li>
                <form class="form-inline justify-content-center">
                </form>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container" >
              <div class="row" >
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Introduction <br>
                      XediaMedia
                    </h1>
                    <p>
                        XediaMedia is a company that operates in the digital advertising sector. 
                        We help you to advertise your product so that your product is more popular with a wider market.
                    </p>
                        <p>
                    You can contact us directly via WhatsApp by clicking the button below
                    </p>
                    <div class="btn-box">
                      <a href="https://wa.me/6282328713200" class="btn1">
                        Whatsapp
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Superiority <br>
                      XediaMedia
                    </h1>
                    <p>
                    We have many branch accounts, 
                    starting from Tiktok, Instagram, Twitter, Facebook, 
                    and Email which will help you to reach a wider market efficiently
                    <p>
                    You can contact us directly via Instagram by clicking the button below
                    </p>
                    <div class="btn-box">
                      <a href="https://www.instagram.com/xediamedia" class="btn1">
                        Instagram
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      How to Order <br>
                      XediaMedia
                    </h1>
                    <p>
                    You can order our services by the link that 
                    I have provided above 
                    <p> or you can also use the link below to connect directly to our email
                    </p>
                    <div class="btn-box">
                      <a href="mailto:Xedia.media@gmail.com" class="btn1">
                        Email
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding" id='services'> 
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
          Our Portofolio
        </h2>
        <p class="col-lg-8 px-0">
            If you are looking for affordable and effective digital advertiser services, then XediaMedia is the answer. Because XediaMedia has many channels that can really help you develop your 
        business and advertise your products to get a wider market and of course help make your own business successful.
        </p>
        </div>
<div class="service_container">
  <div class="carousel-wrap">
    <div class="service_owl-carousel owl-carousel">
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/1.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/2.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/3.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/4.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/5.png" alt="img" />
          </div>
        </div>
      </div>
      <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/6.png" alt="img" />
          </div>
        </div>
      </div>
          <div class="item">
        <div class="box">
          <div class="img">
          <img src="images/7.png" alt="img" />
          </div>
        </div>
      </div>
          <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/8.png" alt="img" />
          </div>
        </div>
      </div>
          <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/9.png" alt="img" />
          </div>
        </div>
      </div>
          <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/10.png" alt="img" />
          </div>
        </div>
      </div>
          <div class="item">
        <div class="box">
          <div class="img">
            <img src="images/11.png" alt="img" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>


  <!-- service section ends -->

  <!-- about section -->
  <section class="about_section" id='about'>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                About Us
              </h2>
            </div>
            <p class="detail_p_mt">
            XediaMedia is a company that operates in the digital advertising sector. 
            We help you to advertise your product so that your product is more popular with a wider market. 
            With the help of our many teams and our many advertiser platforms, 
            your business can reach a wider market and of course your business will develop more successfully. 
            If you have any questions or want to communicate, we are always available 24 hours for you
            </p>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img src="{{ asset('images/media.jpg') }}" class="box_img" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->


 <!-- client section -->

 <div class="container-fluid" id="layanan">
            <div class="heading_container">
              <h2 class="">
                Our Services
              </h2>
 <section>
  <div class="layanan-container">
    <div class="layanan-item">
      <img src="images/branding.png" alt="Layanan 1">
      <h3>Visual Branding and Design</h3>
      <p>helps create a strong and consistent visual identity through elements such as logos, colors and typography.</p>
    </div>
    <div class="layanan-item">
      <img src="images/CP.jpg" alt="Layanan 2">
      <h3>Commercial Photography</h3>
      <p>to promote and sell products or services, to attract audience attention and communicate the value of the product visually.</p>
    </div>
    <div class="layanan-item">
      <img src="images/sosmed.jpg" alt="Layanan 2">
      <h3>Social Media Management</h3>
      <p> We manage, plan and oversee content and interactions on social media platforms to build and maintain a brand presence online</p>
    </div>
    <div class="layanan-item">
      <img src="images/webdev.avif" alt="Layanan 2">
      <h3>Website Development</h3>
      <p>We designing, building and maintaining functional and attractive websites to provide optimal user experience and achieve business goals.</p>
    </div>
    <div class="layanan-item">
      <img src="images/SEO.png" alt="Layanan 2">
      <h3>Search Engine Optimization</h3>
      <p>We increasing the visibility and ranking of a website in search engine search results to attract more visitors organically.</p>
    </div>
    <div class="layanan-item">
      <img src="images/dm.jpg" alt="Layanan 2">
      <h3>Digital Marketing</h3>
      <p>we utilize digital platforms such as social media, search engines and email to promote your products or services and reach your audience more effectively.</p>
    </div>
    <div class="layanan-item">
      <img src="images/video.jpg" alt="Layanan 2">
      <h3>Video Production</h3>
      <p>We provide video production services that include planning, shooting and editing high-quality videos to convey your brand message in an engaging and effective way</p>
    </div>
    <div class="layanan-item">
      <img src="images/digital.png" alt="Layanan 2">
      <h3>Digital Campaign</h3>
      <p>We create innovative and integrated digital campaigns to increase brand visibility, reach a wider audience and drive engagement across various digital platforms.</p>
    </div>
    <!-- Tambahkan item layanan lainnya -->
  </div>
</section>


  <!-- end client section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="row">
          <div class="col-md-3 ">
            <a class="navbar-brand" href="#home">
              XediaMedia
            </a>
          </div>
          <div class="col-md-5 ">
            <div class="info_contact">
              <a href="https://www.google.com/maps?q=(7°02′23.6″S 110°27′21.0″E)" target="_blank">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="https://wa.me/6281947600907" target="_blank">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  +62 81947600907
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="social_box">
              <a href="https://www.tiktok.com/@xediamedia" target="_blank"">
                <i class="fa fa-music" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/xediamedia" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="info_detail">
              <h5>
                Company
              </h5>
              <p>
              XediaMedia is a company that operates in the digital advertising sector. 
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                Services
              </h5>
              <p>
                Advertise products and market client products through digital media anywhere and anytime
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6">
            <div class="">
              <h5>
                Useful links
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="{{ url('#home') }}">
                    Home
                  </a>
                </li>
                <li>
                  <a href="{{ url('#about') }}">
                    About
                  </a>
                </li>
                <li>
                  <a href="{{ url('#services') }}">
                    Services
                  </a>
                </li>
                <li class="mb-0">
                  <a href="{{ url('#contact') }}">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#home">Faiz Widyadananto-2024</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  <a href="https://wa.me/6282328713200" class="floating-whatsapp" target="_blank">
  <i class="fa fa-whatsapp"></i>
  <span>
  Contact Us
  </span>
</a>

  <!-- jQery -->
  <script src="{{URL ::to ('frontend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="{{URL ::to ('frontend/js/bootstrap.js') }}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="{{URL ::to ('frontend/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>