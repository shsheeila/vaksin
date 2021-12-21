@section('judul', 'Home')

<!DOCTYPE html>
  <html lang="en">
      <head>
         <title>Informasi Vaksin - @yield('judul')</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- ===============================================-->
            <!--    Favicons-->
            <!-- ===============================================-->
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('vaksin/assets/img/favicons/apple-touch-icon.png')}}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('vaksin/assets/img/favicons/favicon-32x32.png')}}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vaksin/assets/img/favicons/favicon-16x16.png')}}">
            <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vaksin/assets/img/favicons/pedulilindungi.svg')}}">
            <link rel="manifest" href="{{ asset('vaksin/assets/img/favicons/manifest.json')}}">
            <meta name="msapplication-TileImage" content="{{ asset('vaksin/assets/img/favicons/mstile-150x150.png')}}">
            <meta name="theme-color" content="#ffffff">


            <!-- ===============================================-->
            <!--    Stylesheets-->
            <!-- ===============================================-->
            <link href="{{ asset('vaksin/assets/css/theme.css')}}" rel="stylesheet" />

          </head>

          <body>

            <!-- ===============================================-->
            <!--    Main Content-->
            <!-- ===============================================-->
            <main class="main" id="top">
              <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
                <div class="container"><a class="navbar-brand" href=""><img src="{{ asset('vaksin/assets/img/gallery/logo.png')}}" width="118" alt="logo" /></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
                  <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                      <li class="nav-item px-2"><a class="nav-link" href="#home">Beranda</a></li>
                      <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">Tentang</a></li>
                      <li class="nav-item px-2"><a class="nav-link" href="list">Info Penting</a></li>
                      <li class="nav-item px-2"><a class="nav-link" href="#berita">Berita</a></li>
                      @if (Auth::guest())
                      <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ route('login') }}">Login</a>
                      @else
                      <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ route('dashboard') }}">Dashboard</a>
                      @endif
                  </div>
                </div>
              </nav>
              <section class="py-xxl-10 pb-0" id="home">
                <div class="bg-holder bg-size" style="background-image:url({{ asset('vaksin/assets/img/gallery/banner-home-vaccine.svg')}});background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                  <div class="row min-vh-xl-100 min-vh-xxl-25">
                    <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
                      <p class="fs-1 mb-4"> Lindungi Diri dan Sekitar Anda Dengan<br />Berpartisipasi Dalam Program Vaksinasi COVID-19. </p><a class="btn btn-lg btn-primary" href="#!" role="button">Pendaftaran Vaksinasi</a>
                    </div>
                  </div>
                </div>
              </section>


              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="py-5" id="departments">

                <div class="container">
                  <div class="row">
                    <div class="col-12 py-2">
                      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/bg-departments.png);background-position:top center;background-size:contain;">
                      </div>
                      <!--/.bg-holder-->

                      <h4 class="text-center">Temukan Fasilitas Kesehatan yang Melayani Vaksinasi COVID-19</h4>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              </section>
              <!-- <section> close ============================-->
              <!-- ============================================-->


              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="py-0">

                <div class="container">
                  <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/neurology.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/neurology.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">Neurology</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/eye-care.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/eye-care.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">Eye care</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/cardiac.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/cardiac.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">Cardiac care</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/heart.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/heart.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">Heart care</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/osteoporosis.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/osteoporosis.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">Osteoporosis</p>
                          </a></div>
                      </div>
                    </div>
                    <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                      <div class="d-flex flex-column align-items-center">
                        <div class="icon-box text-center"><a class="text-decoration-none" href="#!"><img class="mb-3 deparment-icon" src="{{ asset('vaksin/assets/img/icons/ent.png')}}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{{ asset('vaksin/assets/img/icons/ent.svg')}}" alt="..." />
                            <p class="fs-1 fs-xxl-2 text-center">ENT</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="pb-0" id="about">

                <div class="container">
                  <div class="row">
                    <div class="col-12 py-3">
                      <div class="bg-holder bg-size" style="background-image:url({{ asset('vaksin/assets/img/gallery/about-us.png')}});background-position:top center;background-size:contain;">
                      </div>
                      <!--/.bg-holder-->

                      <h1 class="text-center">Tentang</h1>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              </section>
              <!-- <section> close ============================-->
              <!-- ============================================-->


              <section class="py-5">
                <div class="bg-holder bg-size" style="background-image:url({{ asset('vaksin/assets/img/gallery/about-bg.png')}};background-position:top center;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{{ asset('vaksin/assets/img/gallery/vaksin.png')}}" alt="..." /></div>
                    <div class="col-md-6 text-justify text-md-start">
                      <h2 class="fw-bold mb-4">Vaksinasi COVID-19</h2>
                      <p>Pada tahap awal, vaksinasi Covid-19 sudah berhasil diberikan kepada
                         seluruh tenaga kesahatan, asisten tenaga kesehatan, dan mahasiswa yang
                         menjalankan pendidikan profesi kedokteran yang bekerja pada fasilitas pelayanan kesehatan.
                         Vaksin tahap kedua juga sudah diberikan kepada lansia, pekerja sektor esensial, dan guru.
                         <br/>
                         <br/>Pemerataan vaksinasi hingga saat ini dilanjutkan untuk masyarakat umum dan terus berjalan hingga berhasil menjangkau seluruh warga negara Indonesia dan warga negara asing yang bertempat tinggal di Indonesia.
                         <br/>Harapannya dengan upaya pemerataan vaksinasi ini, Indonesia dapat segera bangkit dan terbebas dari penyebaran virus Covid-19. </p>
                    </div>
                  </div>
                </div>
              </section>





              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="py-5">

                <div class="container">
                  <div class="row">
                    <div class="col-12 py-3">
                      <div class="bg-holder bg-size" style="background-image:url({{ asset('vaksin/assets/img/gallery/people.png')}});background-position:top center;background-size:contain;">
                      </div>
                      <!--/.bg-holder-->

                      <h1 class="text-center">Kami peduli dengan Anda</h1>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              </section>
              <!-- <section> close ============================-->
              <!-- ============================================-->


              <section class="py-8">
                <div class="bg-holder bg-size" style="background-image:url({{ asset('vaksin/assets/img/gallery/people-bg-1.png')}});background-position:center;background-size:cover;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                  <div class="row align-items-center offset-sm-1">
                    <div class="carousel slide" id="carouselPeople" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <div class="row h-100">
                            <div class="col-sm-3 text-center"><img src="{{ asset('vaksin/assets/img/gallery/banner-wecare-1.jpg')}}" width="200" alt="" />
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                              <h3>Membantu Pelacakan untuk Menghentikan Penyebaran COVID-19</h3>
                              <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i></div>
                              <p>Dengan mengaktifkan lokasi, Anda akan membantu instansi pemerintah terkait dalam melakukan pelacakan untuk menghentikan penyebaran Coronavirus Disease (COVID-19).</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                          <div class="row h-100">
                            <div class="col-sm-3 text-center"><img src="{{ asset('vaksin/assets/img/gallery/komunikasi.jpg')}}" width="200" alt="" />
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                              <h3>Informasi Zonasi dan Notifikasi Keramaian</h3>
                              <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i></div>
                              <p>Anda akan mendapatkan infomasi area zonasi persebaran COVID-19 (merah, kuning, hijau) sesuai dengan lokasi yang Anda pilih dan mendapatkan notifikasi jika Anda berada di keramaian.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="row h-100">
                            <div class="col-sm-3 text-center"><img src="{{ asset('vaksin/assets/img/gallery/kesehatan.jpg')}}" width="200" alt="" />
                            </div>
                            <div class="col-sm-9 text-center text-sm-start pt-3 pt-sm-0">
                              <h2>Pemeriksaan Kesehatan</h2>
                              <div class="my-2"><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i><i class="fas fa-star me-2"></i></div>
                              <p>Jika Anda memerlukan bantuan tenaga kesehatan, Anda bisa menggunakan fitur Teledokter untuk melakukan pemeriksaan kesehatan mandiri dan berkonsultasi dengan tenaga kesehatan terkait kondisi kesehatan Anda.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="position-relative z-index-2 mt-5">
                          <ol class="carousel-indicators">
                            <li class="active" data-bs-target="#carouselPeople" data-bs-slide-to="0"></li>
                            <li data-bs-target="#carouselPeople" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselPeople" data-bs-slide-to="2"> </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>


              <!-- ============================================-->
              <!-- <section> begin ============================-->
                <section class="pb-0" id="berita">

                <div class="container">
                  <div class="row">
                    <div class="col-12 py-3">
                      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
                      </div>
                      <!--/.bg-holder-->

                      <h1 class="text-center">Berita Terkini</h1>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              </section>
              <!-- <section> close ============================-->
              <!-- ============================================-->


              <section>
                <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
                </div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="row">
                        @foreach ($news as $new)
                        <div class="col-sm-4 mb-3">
                        <div class="card" style="width:300px; 18rem;">
                            <div class="card-body">
                              <img src="{{ asset('storage/' . $new->image) }}" class="card-img-top" alt="{{ asset('storage/' . $new->image) }}">
                              <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{ $new->title }}</h5>
                              <svg class="bi bi-calendar2 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                              </svg><span class="fs--1 text-400">{{ $new->updated_at }}</span><span class="fs--1"></span>
                              <p class="card-text">{{ $new->content }}</p>
                              <a href="#" class="stretched-link">Baca Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    </div>
                </div>
              </section>
              <section class="bg-primary">
                <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/cta-bg.png);background-position:center right;margin-top:-8.125rem;background-size:contain;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                  <div class="row">
                    <div class="col-lg-6">
                      <h3 class="fw-bold text-light">Mari berpartisipasi melindungi sesama.</h3>
                    </div>
                    <div class="col-lg-6">
                      <h5 class="mb-3 text-soft-primary">SUBSCRIBE TO NEWSLETTER </h5>
                      <form class="row gx-2 gy-2 align-items-center">
                        <div class="col">
                          <div class="input-group-icon">
                            <label class="visually-hidden" for="inputEmailCta">Address</label>
                            <input class="form-control form-livedoc-control form-cta-control text-soft-primary" id="inputEmailCta" type="email" placeholder="Email" />
                          </div>
                        </div>
                        <div class="d-grid gap-3 col-sm-auto">
                          <button class="btn btn-lg btn-light rounded-3 px-5 py-3" type="submit">Subscribe</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </section>
              <section class="py-0 bg-secondary">
                <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
                </div>
                <!--/.bg-holder-->

                <div class="container">
                    <div class="row py-8">
                      <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/gallery/footer-logo.png" height="51" alt="" /></a>
                        <p class="text-light my-4">The world's most trusted <br />telehealth company.</p>
                      </div>
                      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                        <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Kesehatan</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                          <li class="lh-lg"><a class="footer-link" href="#!">Eye care</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Cardiac are</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Heart care</a></li>
                        </ul>
                      </div>
                      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Member</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                          <li class="lh-lg"><a class="footer-link" href="#!">Free trial</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Silver</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Premium</a></li>
                        </ul>
                      </div>
                      <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                          <li class="lh-lg"><a class="footer-link" href="#!">About Us</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Contact US</a></li>
                          <li class="lh-lg"><a class="footer-link" href="#!">Get Update</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-0 bg-primary">

                  <div class="container">
                    <div class="row justify-content-md-between justify-content-evenly py-4">
                      <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
                      </div>
                      <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                          <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                          </svg>&nbsp;by&nbsp;<a class="fw-bold text-info" href="https://themewagon.com/" target="_blank">Siti Sheilawati </a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- end of .container-->

                </section>
              </section>
            </main>
            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->




            <!-- ===============================================-->
            <!--    JavaScripts-->
            <!-- ===============================================-->
            <script src="{{ asset('vaksin/vendors/@popperjs/popper.min.js')}}"></script>
            <script src="{{ asset('vaksin/vendors/bootstrap/bootstrap.min.js')}}"></script>
            <script src="{{ asset('vaksin/vendors/is/is.min.js')}}"></script>
            <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="{{ asset('vaksin/vendors/fontawesome/all.min.js')}}"></script>
            <script src="{{ asset('vaksin/assets/js/theme.js')}}"></script>

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">

          @yield('content')
</body>
</html>

