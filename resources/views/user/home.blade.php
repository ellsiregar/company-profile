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

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
            </a>

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

            <img src="{{ asset('assets_main/img/back.jpeg') }}" alt="" data-aos="fade-in">

            <div class="container">

                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show custom-alert"
                                    role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <style>
                                .custom-alert {
                                    position: absolute;
                                    top: 10%;
                                    left: 50%;
                                    transform: translateX(-50%);
                                    width: 70%;
                                    z-index: 1050;
                                    padding: 15px;
                                    border-radius: 5px;
                                    background-color: #d4edda;
                                    color: #155724;
                                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                                }
                            </style>
                            <script>
                                setTimeout(function() {
                                    var alert = document.querySelector('.alert');
                                    if (alert) {
                                        alert.style.transition = 'opacity 0.7s ease';
                                        alert.style.opacity = '0';
                                        setTimeout(() => alert.remove(), 500);
                                    }
                                }, 5000);
                            </script>

                        <h2>welcome lisfera coffe</h2>
                        <p>terimakasih sudah mengunjungi website kami</p>
                    </div>
                </div>

                <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($servis as $servis)
                        <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-binoculars"></i>
                                <h3><a href="{{ route('detail.servis', $servis->id) }}">{{ $servis->fasilitas }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>

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
                            <p> Foto belum tersedia. </p>
                        @endif
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Lisfera Caffe</h3>
                        @if (!empty($about->deskripsi))
                            <p> {{ $about->deskripsi }}</p>
                        @else
                            <P> deskripsi belum tersedia </P>
                        @endif
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

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
                                    alt="" style="width: 350px; height: 350px; object-fit: cover;">
                                <div class="portfolio-info">
                                    <h4>{{ $portfolio->nama_portfolio }}</h4>
                                    <p>{{ $portfolio->deskripsi }}</p>
                                    <a href="{{ asset('storage/' . $portfolio->foto) }}"
                                        title="{{ $portfolio->nama_portfolio }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                    <a href="{{ route('detail.portfolio', $portfolio->id_portfolio) }}"
                                        {{ $portfolio->deskripsi }} title="More Details" class="details-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach
                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="{{ asset('assets_main/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="">

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
                }
              }
            </script>
            <div class="swiper-wrapper">

                @foreach ($review as $review)
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <h3>{{ $review->name }}</h3>
                    <h4>{{ $review->email }}</h4>
                    <div class="stars">
                      @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $review->rating)
                          <i class="bi bi-star-fill"></i> <!-- Bintang penuh -->
                        @else
                          <i class="bi bi-star"></i> <!-- Bintang kosong -->
                        @endif
                      @endfor
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>{{ $review->pesan }}</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- /Testimonials Section -->

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
                                            alt="" style="width: 300px; height: 300px; object-fit: cover;">
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

        <!-- Review Section -->
        <section id="review" class="review section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Review</h2>
                <p>Give Your Feedback</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="{{ route('user.review') }}" method="POST">
                            @csrf

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" required>
                            </div>

                            <!-- Rating Bintang -->
                            <div class="mb-3">
                                <label class="form-label">Rating</label>
                                <div id="star-rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" title="5 stars">&#9733;</label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" title="4 stars">&#9733;</label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" title="3 stars">&#9733;</label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" title="2 stars">&#9733;</label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" title="1 star">&#9733;</label>
                                </div>
                            </div>

                            <!-- Ulasan -->
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Review</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Write your review here..."
                                    required></textarea>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit Review</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>

        <style>
            #star-rating {
                direction: rtl;
                display: inline-flex;
            }

            #star-rating input[type="radio"] {
                display: none;
            }

            #star-rating label {
                font-size: 2rem;
                color: #ccc;
                cursor: pointer;
                transition: color 0.2s ease-in-out;
            }

            #star-rating input[type="radio"]:checked~label {
                color: #ffc107;
            }

            #star-rating label:hover,
            #star-rating label:hover~label {
                color: #ffc107;
            }
        </style>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Sertakan Leaflet CSS dan JS -->
                <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                <!-- Kontainer untuk peta -->
                <div id="map" style="height: 270px;"></div>

                <script>
                    // Nama lokasi dari controller
                    var lokasi = "{{ $lokasi }}";

                    // Gunakan Nominatim API untuk mendapatkan koordinat dari nama lokasi
                    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${lokasi}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.length > 0) {
                                // Ambil koordinat dari hasil pencarian
                                var latitude = data[0].lat;
                                var longitude = data[0].lon;

                                // Membuat peta dan menambahkan marker
                                var map = L.map('map').setView([latitude, longitude], 13);

                                // Menambahkan layer peta OpenStreetMap
                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(map);

                                // Menambahkan marker pada lokasi dan menampilkan nama lokasi dalam popup
                                L.marker([latitude, longitude]).addTo(map)
                                    .bindPopup('<b>' + lokasi + '</b>')
                                    .openPopup();
                            } else {
                                alert("Lokasi tidak ditemukan.");
                            }
                        })
                        .catch(error => {
                            console.error("Error:", error);
                        });
                </script>

                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between">
                            <div class="info-item d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                <li><i class="bi bi-chevron-right"></i> <a href="#">{{ $item->fasilitas }}</a>
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
