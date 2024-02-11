@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partials.breadcrumb')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="custom-header mb-5">
                <h2 class="text-uppercase">Galeri</h2>
                <p class="mt-2">Lihat galeri keluarga ormawa fakultas teknik</p>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Fakultas</li>
                        <li data-filter=".filter-card">HMP</li>
                    </ul>
                </div>
            </div>
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-2 col-md-4 col-sm-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('frontend/assets/img/person.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>Ambil dari akun admin/author</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/assets/img/person.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="Fakultas ambil dari admin/author"><i
                                        class="bi bi-eye-fill"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-2 col-md-12 col-sm-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('frontend/assets/img/person.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>HIMASI UNIMAL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('frontend/assets/img/person.jpg') }}" data-gallery="portfolioGallery"
                                    class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Portfolio Section -->
@endsection
