<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lisfera Coffe</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets_main/img/user.jpeg') }}" rel="icon">
    <link href="{{ asset('assets_main/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_main/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_main/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_main/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_main/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_main/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets_main/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="service-details-page">

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}#hero" class="active">Home<br></a></li>
                <li><a href="{{ route('home') }}#about">About</a></li>
                <li><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
                <li><a href="{{ route('home') }}#team">Team</a></li>
                <li><a href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        </div>
      </header>

      <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
          <div class="heading">
            <div class="container">
              <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                  <h1>Service Details</h1>
                  {{-- <p class="mb-0">{{$about->deskripsi}}</p> --}}
                </div>
              </div>
            </div>
          </div>
          <nav class="breadcrumbs">
            <div class="container">
              <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Service Details</li>
              </ol>
            </div>
          </nav>
        </div><!-- End Page Title -->

        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">

          <div class="container">

            <div class="row gy-5">

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                <div class="service-box">
                  <h4>Serices List</h4>
                  <div class="services-list">
                    @foreach ($services as $item)
                    <a href="{{ route('detail.servis', $item->id) }}" class=""><i class="bi bi-arrow-right-circle"></i><span>{{ $item->fasilitas }}</span></a>
                    @endforeach
                  </div>
                </div><!-- End Services List -->

                <div class="help-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-headset help-icon"></i>
                  <h4>Have a Question?</h4>
                  <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>{{$contact->no_tlpn}}</span></p>
                  <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="">{{$contact->email}}</a></p>
                </div>

              </div>

              <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('storage/' . $servis->foto) }}" alt="" class="img-fluid services-img" style="width: 100%; height: 400px; object-fit: cover;">
                <h3>{{$servis->fasilitas}}</h3>
                <p>
                  {{$servis->deskripsi}}
                </p>
              </div>

            </div>

          </div>

        </section><!-- /Service Details Section -->

      </main>

      <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename"></span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p><strong>Alamat</strong></p>
                            <p>{{ $contact->lokasi }}</p>
                            <p><strong>Phone:</strong> <span>{{ $contact->no_tlpn }}</span></p>
                            <p><strong>Email:</strong> <span>{{ $contact->email }}</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            @foreach ($services as $item)
                                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('detail.servis', $item->id) }}">{{ $item->fasilitas }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_main/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_main/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets_main/js/main.js') }}"></script>

</body>

</html>
