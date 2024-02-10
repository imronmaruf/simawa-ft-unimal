@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partials.breadcrumb')
    {{-- Section Sejarah --}}
    <section id="about-instansi" class="about-instansi d-flex align-items-center">

        <div class="container" data-aos="fade-up">
            <header class="custom-header">

                {{-- NAMA INSTANSI DIAMBIL DARI DATABASE FIELD NAMA-ORMAWA --}}
                <h2 class="text-uppercase">Sejarah</h2>
                <p class="mt-2">HImpunana mahasiswa sistem informasi</p>
            </header>

            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">HIMASI-UNIMAL</h2>
                    {{-- NAMA INSTANSI DIAMBIL DARI DATABASE FIELD NAMA-ORMAWA-PREFIX --}}

                    <h3 data-aos="fade-up">Himpunan Mahasiswa Sistem Informasi</h3>
                    <p data-aos="fade-up" data-aos-delay="400">sejarah diambil dari database tabel ormawa. <br>Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Consequatur quo optio autem. Veritatis repellendus
                        error accusantium quasi placeat, nihil quidem amet voluptatem animi tenetur dolor quos odit non iure
                        ducimus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati architecto hic,
                        suscipit explicabo ratione eum facilis debitis cum repellat voluptatem eligendi aspernatur
                        dignissimos soluta, quisquam vero perferendis mollitia inventore quod? </p>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Berita dari Himasi</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-instansi-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('frontend/assets/img/logo_ormawa/himasi.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Section Struktur Organisasi --}}
    <section id="team" class="team-custom align-content-center">

        <div class="container aos-init aos-animate" data-aos="fade-up">

            <header class="custom-header">
                <h2 class="text-uppercase">Struktur Pengurus</h2>
                {{-- buat di database untuk struktur pengurus ada field untuk periode dan nama kabinet --}}
                <p class="mt-2">Periode 2023</p>
            </header>
        </div>


        {{-- nanti di loopnya mulai sini --}}
        {{-- header h4 diambil dari jabatan dari tabel --}}
        <div class="row gy-4 justify-content-center align-item-center text-center">
            <div class=" col-lg-12">
                <h4 class="mb-3"> Pengurus inti</h4>
            </div>
        </div>
        <div class="row gy-4 justify-content-center align-item-center">
            <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                data-aos-delay="100">
                <div class="anggota">
                    <div class="anggota-img">
                        <img src="{{ asset('frontend/assets/img/person.jpg') }}" class="card-img-top" alt="imf-fluid">
                        <div class="info">
                            <h6>Imron Ma'ruf Fajaruddin</h6>
                            <p class="mb-3">Jabatan apa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
