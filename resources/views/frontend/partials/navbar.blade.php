<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('frontend/assets/img/logo_ormawa/maskot.png') }}" alt="">
            <span>SIMAWAFT</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                {{-- <li><a class="getstarted scrollto" href="#hero">Beranda</a></li> --}}
                <li class="dropdown"><a href="#"><span>ORMAWA FT-UNIMAL</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>FAKULTAS</span>
                                <i class="bi bi-chevron-right"></i></a>

                            <ul>
                                <li><a href="{{ url('/instansi/ft') }}">Badan Eksekutif Mahasiswa</a></li>
                                <li><a href="#">Dewan Perwakilan Mahasiswa</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a href="#"><span>HMP FT-Unimal</span>
                                <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li>
                                    <a href="#">Satu</a>
                                </li>
                                <li>
                                    <a href="#">Enam</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li><a class="nav-link scrollto" href="#tentangkami">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#artikel">Berita</a></li>
                <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
                <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
