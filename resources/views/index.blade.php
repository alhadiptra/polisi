    @extends('components.master')

    @section('content')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/images/logos/111.jpg') }}" alt="Ilustrasi Polisi Anak" class="img-fluid rounded shadow">
        </div>
    </div>
</div>


        <div class="col-lg-4">
            <div class="row">
                <!-- VISI -->
                <div class="col-lg-12 mb-4">
                    <div class="card shadow-sm border-0 bg-light-primary">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="ti ti-eye fs-5"></i>
                                </div>
                                <h5 class="card-title mb-0 fw-bold text-primary">VISI</h5>
                            </div>
                            <p class="text-dark fs-6 lh-lg mb-0">
                                Membangun masyarakat yang lebih aman dan transparan dengan mendorong komunikasi yang lancar dan kepercayaan antara warga dan penegak hukum.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- MISI -->
                <div class="col-lg-12">
                    <div class="card shadow-sm border-0 bg-light-success">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                    <i class="ti ti-target-arrow fs-5"></i>
                                </div>
                                <h5 class="card-title mb-0 fw-bold text-success">MISI</h5>
                            </div>
                            <p class="text-dark fs-6 lh-lg mb-0">
                                Memberdayakan warga dan penegak hukum melalui platform digital yang lancar, memungkinkan pelaporan secara real-time, komunikasi yang efisien, dan kolaborasi komunitas—mendorong keselamatan, transparansi, dan kepercayaan di semua tingkat masyarakat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
