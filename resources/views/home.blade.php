@extends('app')

@section('content')

    <section class="hero-section ptb-120 text-white bg-gradient" style="background: url('asset('img/hero-dot-bg.png')no-repeat center right">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-10">
            <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                <h1 class="fw-bold display-5">Dapatkan Kendali Penuh dan Visibilitas Perusahaan Anda</h1>
                <p class="lead">Aplikasi absensi berbasis mobile untuk memantau kinerja karyawan anda.</p>
                <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                <a href="request-demo.html" class="btn btn-primary me-3">Request For Demo</a>
                <a href="../www.youtube.com/watchaec0.html?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0">
                    <i class="fas fa-play"></i> Watch Demo </a>
                </div>
                <div class="row justify-content-lg-start mt-60">
                <h6 class="text-white-70 mb-2">Dipercaya oleh +100 perusahaan</h6>
                <div class="col-4 col-sm-3 my-3">
                    <img src="{{ asset('img/clients/client-3.png') }}" alt="client" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 my-3">
                    <img src="{{ asset('img/clients/client-4.png') }}" alt="client" class="img-fluid">
                </div>
                <div class="col-4 col-sm-3 my-3">
                    <img src="{{ asset('img/clients/client-1.png') }}" alt="client" class="img-fluid">
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-5 col-md-8 mt-5">
            <div class="hero-img position-relative circle-shape-images">
                <!--animated shape start-->
                <ul class="position-absolute animate-element parallax-element circle-shape-list">
                <li class="layer" data-depth="0.03">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-0 hero-1">
                </li>
                <li class="layer" data-depth="0.02">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-1 hero-1">
                </li>
                <li class="layer" data-depth="0.04">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-2 hero-1">
                </li>
                <li class="layer" data-depth="0.04">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-3 hero-1">
                </li>
                <li class="layer" data-depth="0.03">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-4 hero-1">
                </li>
                <li class="layer" data-depth="0.03">
                    <img src="{{ asset('img/shape/circle-1.svg') }}" alt="shape" class="circle-shape-item type-5 hero-1">
                </li>
                </ul>
                <!--animated shape end-->
                <img src="{{ asset('img/app-two-phone.png') }}" alt="hero img" class="img-fluid position-relative z-5">
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="feature-promo ptb-120 bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h2>Dengan Semua Fitur Yang Anda Butuhkan</h2>
                        <p>Gasik membantu untuk meningkatkan produktivitas dan efisiensi bisnis anda</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-mobile fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Absensi Online</h3>
                            <p> Absensi melalui smartphone dimanapun, kapanpun. Cukup dengan selfie. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-notes fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Timesheet</h3>
                            <p>Mencatat pekerjaan harian, secara realtime anda dapat memantau produktivitas mereka. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-receipt fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Reimbursement</h3>
                            <p>Prosedur klaim reimbursement jadi lebih mudah, cukup foto dan unggah ke Aaplikasi </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-calendar fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Shifting</h3>
                            <p>Atur shift kerja sesuai kebutuhan Anda secara mudah dan otomatis. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-clock fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Overtime</h3>
                            <p>Pencatatan lembur secara otomatis dengan perhitungan jam lembur yang terdokumentasi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-promo p-lg-4 mt-3 d-flex align-items-start">
                        <div class="icon-box rounded me-4 bg-primary">
                            <i class="fal fa-receipt fa-2x text-white"></i>
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h5">Cuti, Izin dan Sakit</h3>
                            <p>Prosedur pengajuan cuti, izin dan sakit jadi lebih mudah. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-lg-5 pt-3">
                <div class="col-lg-6 mt-4">
                    <div class="position-relative d-flex flex-column h-100 flex-wrap bg-danger-soft p-5 rounded-custom">
                        <div class="cta-left-info mb-2">
                            <h5>Utilize your software data</h5>
                            <p>Progressively reinvent models and niche revolutionary benefits for integrated niches. </p>
                        </div>
                        <div class="mt-auto">
                            <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                        </div>
                        <div class="cta-img position-absolute right-0 bottom-0">
                            <img src="{{ asset('img/cta-img-1.png') }}" alt="cta img" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                        <div class="cta-left-info mb-2">
                            <h5>Get real time updated anytime</h5>
                            <p>Progressively reinvent models and niche revolutionary benefits for integrated niches. </p>
                        </div>
                        <div class="mt-auto">
                            <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                        </div>
                        <div class="cta-img position-absolute right-0 bottom-0">
                            <img src="{{ asset('img/cta-img-2.png') }}" alt="cta img" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section ptb-120" id="whyus">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="section-heading mb-5">
                        <h2>Meningkatkan Efisiensi Bisnis Dengan Teknologi</h2>
                        <p>Gasik menerapakan teknologi terkini untuk membantu perusahaan anda dalam mengelola SDM secara realtime</p>
                    </div>
                    <div class="single-feature d-flex mb-4">
                        <span class="fad fa-map fa-2x text-primary"></span>
                        <div class="ms-4 mt-2">
                            <h5>Teknologi berbasis GPS </h5>
                            <p>Geofencing memungkinkan Anda mencatat banyak titik kehadiran karyawan, di manapun di dunia. </p>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-4">
                        <span class="fad fa-camera fa-2x text-primary"></span>
                        <div class="ms-4 mt-2">
                            <h5>Sistem Pengenalan Wajah</h5>
                            <p>Teknologi pengenalan wajah (face recognition) untuk mencegah karyawan melakukan kecurangan.</p>
                        </div>
                    </div>
                    <div class="single-feature d-flex mb-4">
                        <span class="fad fa-code fa-2x text-primary"></span>
                        <div class="ms-4 mt-2">
                            <h5>Open API</h5>
                            <p>Dapat diiintegrasikan dengan aplikasi HR (HRIS/HRMS) yang telah Anda miliki.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="feature-shape-img position-relative mt-5 mt-lg-0">
                        <div class="img-bg-shape position-absolute">
                            <img src="{{ asset('img/shape/shape.svg') }}" alt="integations">
                        </div>
                        <img src="{{ asset('img/dashkit.png') }}" class="img-fluid skewed-img-right rounded-custom shadow-lg" alt="softtent">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="why-choose-us ptb-100">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                        <img src="{{ asset('img/screen/widget-11.png') }}" class="img-fluid" alt="feature-image">
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="why-choose-content">
                        <h2>Laporan dan Analisa untuk Meningkatkan Bisnis</h2>
                        <p>Kemudahan dalam melakukan rekapitulasi absensi dan kegiatan setiap staff/karyawan per bulannya, sehingga lebih efektif dan efisien.</p>
                        <ul class="list-unstyled mt-4 mb-4">
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Prosentase Kehadiran</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Monitor Produktivitas Waktu Kerja</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Membantu Perhitungan Kompensasi</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Download Rekap Absensi</li>
                        </ul>
                        <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="image-feature pt-60 pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="feature-img-content">
                        <h2>Match Everything to Brand and Style</h2>
                        <p>Intrinsicly pontificate reliable metrics with enabled. Holisticly maintain clicks-and-mortar manufactured products empower viral customer service through resource deliverables.</p>
                        <p>Customer service through resource pontificate reliable metrics with enabled expedite resource maximizing information maintain manufactured products.</p>
                        <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More About Us <i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                        <img src="{{ asset('img/screen/widget-12.png') }}" class="img-fluid" alt="feature-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer-review-tab ptb-120 bg-gradient text-white  position-relative z-2">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2>Apa Kata Mereka Tentang Kami</h2>
                        <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate alternative architectures whereas iterate.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="testimonial-tabContent">
                        @foreach ($testimoni as $item)
                            <div class="tab-pane fade {{ ($item->status=='primary') ? 'active show' : '' }}" id="testimonial-tab-{{ $item->id }}" role="tabpanel">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                            <img src="{{ asset('img/testimonial/quotes-left.svg') }}" alt="testimonial quote" width="65" class="img-fluid mb-32">
                                            <blockquote class="blockquote">
                                                <p>{{ $item->comments }}</p>
                                            </blockquote>
                                            <div class="author-info mt-4">
                                                <h6 class="mb-0">{{ $item->name }}</h6>
                                                <span>{{ $item->position }}, {{ $item->company }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="author-img-wrap pt-5 ps-5">
                                            <div class="testimonial-video-wrapper position-relative">
                                                <img src="{{ asset('img/testimonial/t-'.$item->id.'.jpg') }}" class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                                <div class="customer-info text-white d-flex align-items-center">
                                                    <a href="../www.youtube.com/watchaec0.html?v=hAP2QF--2Dg" class="video-icon popup-youtube text-decoration-none"><i class="fas fa-play"></i> <span class="text-white ms-2 small"> Watch Video</span></a>
                                                </div>
                                                <div class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills testimonial-tab-menu mt-60" id="testimonial" role="tablist">
                        @foreach ($testimoni as $item)
                            <li class="nav-item" role="presentation">
                                <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link {{ ($item->status=='primary') ? 'active' : '' }}" data-bs-toggle="pill" data-bs-target="#testimonial-tab-{{ $item->id }}" role="tab" aria-selected="false">
                                    <div class="testimonial-thumb me-3">
                                        <img src="{{ asset('img/testimonial/'.$item->id.'.jpg') }}" width="50" class="rounded-circle" alt="testimonial thumb">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="mb-0">{{ $item->name }}</h6>
                                        <span>{{ $item->position }}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section> 

@endsection