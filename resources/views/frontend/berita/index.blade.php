@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partials.breadcrumb')

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ asset('frontend/assets/img/person.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">disini judul berita</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-single.html">Himasi unimal</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum
                                et. Quo libero rerum voluptatem pariatur nam.
                                Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et
                                quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi
                                molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio
                                quos distinctio.
                            </p>
                            <div class="read-more">
                                <a href="blog-single.html">Baca Selengkapnya</a>
                            </div>
                        </div>

                    </article><!-- End blog entry -->


                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">Kegiatan<span>(25)</span></a></li>
                                <li><a href="#">Program Kerja<span>(12)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Berita Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="{{ asset('frontend/assets/img/person.jpg') }}" alt="">
                                <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>


                            <div class="post-item clearfix">
                                <img src="{{ asset('frontend/assets/img/person.jpg') }}" alt="">
                                <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('frontend/assets/img/person.jpg') }}" alt="">
                                <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tag</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>

                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section>
@endsection
