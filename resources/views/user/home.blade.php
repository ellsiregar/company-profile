<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Gp Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets_main/img/favicon.png') }}" rel="icon">
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
    <link href="{{ asset('assets_main/css/main.css') }}"rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('assets_main/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">

                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2>{{ $company->judul }}</h2>
                        <p>{{ $company->deskripsi }}</p>
                    </div>
                </div>

                <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($servis as $servis)
                        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-binoculars"></i>
                                <h3><a href="">{{ $servis->fasilitas }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        @if (!empty($about->foto))
                            <img src="{{ asset('storage/' . $about->foto) }}" class="img-fluid" alt="">
                        @else
                            <p>Foto belum tersedia.</p>
                        @endif

                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Lisfera Caffe</h3>
                        @if (!empty($about->deskripsi))
                            <p> {{ $about->deskripsi }}</p>
                        @else
                            <p>Deskripsi belum tersedia.</p>
                        @endif
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>

                    <div class="swiper-pagination"></div>
                </div>

            </div>

            <!-- Portfolio Section -->
            <section id="portfolio" class="portfolio section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Check our Portfolio</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($kategoris as $kategori)
                                <li data-filter=".filter-{{ Str::slug($kategori->nama_kategori, '-') }}">
                                    {{ $kategori->nama_kategori }}</li>
                            @endforeach
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($portfolios as $portfolio)
                                <div
                                    class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ Str::slug($portfolio->kategori->nama_kategori, '-') }}">
                                    <img src="{{ asset('storage/' . $portfolio->foto) }}" class="img-fluid"
                                        alt="" style="width: 300px; height: 300px; object-fit: cover;">
                                    <div class="portfolio-info">
                                        <h4>{{ $portfolio->nama_portfolio }}</h4>
                                        <p>{{ $portfolio->deskripsi }}</p>
                                        <a href="{{ asset('assets_main/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                            title="App 1" data-gallery="portfolio-gallery-app"
                                            class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"></i>
                                        </a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link">
                                            <i class="bi bi-link-45deg"></i>
                                        </a>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach
                        </div><!-- End Portfolio Container -->

                    </div>

                </div>

            </section><!-- /Portfolio Section -->


            <!-- Team Section -->
            <section id="team" class="team section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>our Team</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        @foreach ($teams as $team)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="team-member">
                                    <div class="member-img">
                                        @if (!empty($team->foto))
                                            <img src="{{ asset('storage/' . $team->foto) }}" class="img-fluid"
                                                alt="">
                                        @else
                                            <p>Foto belum tersedia.</p>
                                        @endif
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter-x"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $team->nama }}</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div><!-- End Team Member -->
                        @endforeach

                    </div>

                </div>

            </section><!-- /Team Section -->

            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                        <iframe style="border:0; width: 100%; height: 270px;"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31790.43720203043!2d105.3236314!3d-5.1351351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1734586532614!5m2!1sid!2sid"
                            frameborder="0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div><!-- End Google Maps https://maps.app.goo.gl/oB5mQreqZ7bWsjV57 -->

                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    @if (!empty($contact->lokasi))
                                        <p>{{ $contact->lokasi }}</p>
                                    @else
                                        <p>Lokasi belum tersedia.</p>
                                    @endif
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    @if (!empty($contact->no_tlpn))
                                        <p>{{ $contact->no_tlpn }}</p>
                                    @else
                                        <p>No telepon belum tersedia.</p>
                                    @endif
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    @if (!empty($contact->email))
                                        <p>{{ $contact->email }}</p>
                                    @else
                                        <p>Email belum tersedia.</p>
                                    @endif
                                </div>
                            </div><!-- End Info Item -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">GP</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
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
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                        href="https://themewagon.com">ThemeWagon</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const portfolioContainer = document.querySelector('.isotope-container');
            if (portfolioContainer) {
                const isotopeInstance = new Isotope(portfolioContainer, {
                    itemSelector: '.portfolio-item',
                    layoutMode: 'fitRows'
                });

                const filters = document.querySelectorAll('.portfolio-filters li');
                filters.forEach(filter => {
                    filter.addEventListener('click', function() {
                        filters.forEach(el => el.classList.remove('filter-active'));
                        this.classList.add('filter-active');
                        const filterValue = this.getAttribute('data-filter');
                        isotopeInstance.arrange({
                            filter: filterValue
                        });
                    });
                });
            }
        });
    </script>

</body>

</html>
