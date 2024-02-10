@include('auth.layouts.main')

<!-- container -->
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
            <!-- Card -->
            <div class="card smooth-shadow-md">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <a href="../index.html"><img src="{{ asset('img/logo_ormawa/') }}" class="mb-2"
                                alt=""></a>
                        <h3><strong>Masuk</strong> </h3>
                        <p class="mb-6">Harap Masukkan akun anda</p>
                    </div>
                    <!-- Form -->
                    <form>
                        <!-- Username -->
                        <div class="mb-3">
                            {{-- <label for="email" class="form-label">Email</label> --}}
                            <input type="email" id="username" class="form-control" name="username"
                                placeholder="Masukkan Username" required="">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="Password" required="">
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>

                            <p class="d-sm-flex justify-content-center mt-2">-atau-</p>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi-google me-1"></i> Masuk menggunakan Google
                                </button>
                            </div>


                            <div class="d-md-flex justify-content-between mt-4">
                                <div>
                                    <a href="/forgot-password" class="text-inherit fs-5">Lupa
                                        Password?</a>
                                </div>

                            </div>
                        </div>

                        <div class="end-form">
                            <h6 class="mt-6 mb-3 text-center text-body-secondary">
                                &copy; Copyright <strong><span>ORMAWA FT-UNIMAL</span></strong>. All Rights Reserved
                                <br>Developed by <a class="text-decoration-none text-primary" href="#"
                                    target="blank">Imron Ma'ruf F.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
