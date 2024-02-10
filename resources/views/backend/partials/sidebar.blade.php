 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <a class="navbar-brand text-white" href="./index.html">
             <img src="{{ asset('img/logo_ormawa/maskot.png') }}" alt="" /><strong>
                 SIMAWA</strong></a>
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link has-arrow  active " href="./index.html">
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                 </a>
             </li>
             <li class="nav-item">
                 <div class="navbar-heading">Konten Media</div>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                     data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                     <i class="bi bi-newspaper fw-bold me-2"></i><span class="fw-semi-bold">Berita</span>
                 </a>

                 <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link " href="./pages/billing.html">
                                 Daftar Berita
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link " href="./pages/pricing.html">
                                 Kategori
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link " href="#">
                     <i class="bi bi-image  me-2"></i><span class="fw-semi-bold">Galeri</span>
                 </a>
             </li>
             {{-- KHUSUS ADMIN ORMAWA --}}
             <li class="nav-item">
                 <a class="nav-link " href="#">
                     <i class="bi bi-diagram-3-fill fw-bold me-2"></i><span class="fw-semi-bold">Struktur
                         Organisasi</span>
                 </a>
             </li>
             <li class="nav-item">
                 <div class="navbar-heading">Dokumen</div>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="./docs/accordions.html">
                     <i class="bi bi-file-earmark-pdf-fill fw-bold me-2"></i><span class="fw-semi-bold">Proposal</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="./docs/accordions.html">
                     <i class="bi bi-file-earmark-pdf-fill fw-bold me-2"></i><span class="fw-semi-bold">LPJ</span>

                 </a>
             </li>
             <li class="nav-item">
                 <div class="navbar-heading">Anggota ORMAWA</div>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                     data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                     <i class="bi bi-people-fill fw-bold me-2"></i><span class="fw-semi-bold">Instansi</span>

                 </a>
                 <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link " href="./pages/sign-in.html">Fakultas</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link  " href="./pages/sign-up.html">HMP</a>
                         </li>

                     </ul>
                 </div>
             </li>
         </ul>

     </div>
 </nav>
