@include('backend.layouts.main')

<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
            <!-- Card -->
            <div class="card smooth-shadow-md">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4">
                        <a href="../index.html"><img src="../assets/images/brand/logo/logo-primary.svg" class="mb-2"
                                alt=""></a>
                        <h5 class="mb-4"><strong> Masukkan Email Untuk Mereset Password.</strong>
                        </h5>
                    </div>
                    <!-- Form -->
                    <form>
                        <!-- Email -->
                        <div class="mb-3">
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Masukkan Email Aktif" required="">
                        </div>
                        <!-- Button -->
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>

                        <div class="d-md-flex justify-content-between mt-4">
                            <div>
                                <a href="/login" class="text-inherit
                        fs-5 text-primary"><i
                                        class='bi bi-arrow-bar-left'></i><strong> Kembali</strong></a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
