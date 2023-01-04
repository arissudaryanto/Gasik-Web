@extends('app')

@section('content')

<section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('img/page-header-bg.svg')no-repeat bottom left">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h1 class="display-5 fw-bold">Harga Sesuai Bisnis Anda</h1>
                <p class="lead">Kami menawarkan skema harga yang dapat disesuaikan dengan jumlah karyawan yang ada di perusahaan Anda.</p>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
    </div>
</section>

<section class="crm-pricing-section pt-120 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="crm-title text-center">
                    <span class="crm-subtitle">Table Harga <img src="{{ asset('img/shape/arrow-red.png') }}" alt="arrow" class="ms-1"></span>
                    <h2 class="mb-3">Pilih paket terbaik untuk Anda</h2>
                    <ul class="crm-special-features list-unstyled p-0 m-0 d-flex align-items-center justify-content-center flex-wrap">
                        <li><span class="dot me-2"></span>Free 7 Days trial</li>
                        <li><span class="dot me-2"></span>No Credit Card Required</li>
                        <li><span class="dot me-2"></span>Cancel anytime</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="crm-pricing-table table-responsive bg-white mt-5">
            <table class="table">
                <tr>
                    <th class="crm-pricing-switch-wrapper position-relative">
                        <span class="title">Features</span>
                    </th>
                    <th class="text-center crm-package-wrapper">
                        <span class="title-sm">Standard</span>
                        <span class="crm-package-price crm_yearly_price">Gratis</span>
                        <span class="crm-package-price crm_monthly_price">Gratis</span>
                        <p class="mb-3 crm-package-subtitle">/user/bulan pembayaran per Tahun</p>
                        <a href="#" class="btn btn-sm crm-package-btn">Coba Gratis</a>
                    </th>
                    <th class="text-center crm-package-wrapper">
                        <span class="title-sm">Professional</span>
                        <span class="crm-package-price crm_yearly_price">2.500</span>
                        <p class="mb-3 crm-package-subtitle">/user/bulan pembayaran per Tahun</p>
                        <a href="#" class="btn btn-sm crm-package-btn">Coba Gratis</a>
                    </th>
                    <th class="text-center crm-package-wrapper">
                        <span class="title-sm">Enterprise</span>
                        <span class="crm-package-price crm_yearly_price">6.000</span>
                        <span class="crm-package-price crm_monthly_price">6.000</span>
                        <p class="mb-3 crm-package-subtitle">/user/bulan pembayaran per Tahun</p>
                        <a href="#" class="btn btn-sm crm-package-btn">Coba Gratis</a>
                    </th>
                    <th class="text-center crm-package-wrapper">
                        <span class="title-sm">Ultimate</span>
                        <h3>Call Us</h3>
                        <p class="mb-3 crm-package-subtitle">On Premise</p>
                        <a href="#" class="btn btn-sm crm-package-btn">Coba Gratis</a>
                    </th>
                </tr>
                <tr class="bg-light">
                    <td colspan="5"><h6>Absensi Online</h6></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Clock In dan Clock Out</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">GPS (clock in dan clock out)</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Pengenalan Wajah/Biometrik</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Validasi Radius</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Pengaturan Shift</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Clock In dan Clock Out Offline</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr class="bg-light">
                    <td colspan="5"><h6>Activity/Timesheet</h6></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Activity (Timesheet) dengan Foto dan GPS Location</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Timesheet Advanced</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Laporan Timesheet dan Workload Analysis (WLA)</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr class="bg-light">
                    <td colspan="5"><h6>Reimbursement, Overtime, Leave</h6></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Pengajuan Cuti, Izin, Sakit</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Reimburse menggunakan OCR</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr class="bg-light">
                    <td colspan="5"><h6>Lainnya</h6></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Training</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Onboarding Service</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Integrasi, Custimise</td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-x text-danger"></i></td>
                    <td class="crm_pricing_feature_check text-center"><i class="fas fa-check"></i></td>
                </tr>
                <tr>
                    <td class="crm_pricing_features_name">Support</td>
                    <td class="crm_pricing_feature_check text-center"><small>Email</small></td>
                    <td class="crm_pricing_feature_check text-center"><small>Email, WhatsApp</small></td>
                    <td class="crm_pricing_feature_check text-center"><small>Email, WhatsApp</small></td>
                    <td class="crm_pricing_feature_check text-center"><small>Email, WhatsApp, Telp.</small></td>
                </tr>
            </table>
        </div>
    </div>
</section>

<section class="faq-section ptb-120 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-12">
                <div class="section-heading text-center">
                    <h2>Frequently Asked Questions</h2>
                    <p>Pertanyaan Umum Seputar Gasik.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="accordion faq-accordion" id="accordionFaq">
                    @foreach ($faq as $item)
                        <div class="accordion-item border border-2 {{ ($item->status=='primary') ? 'active' : '' }}">
                            <h5 class="accordion-header" id="faq-{{ $item->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true">
                                    {{ $item->title }}
                                </button>
                            </h5>
                            <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse {{ ($item->status=='primary') ? 'show' : '' }}" aria-labelledby="faq-{{ $item->id }}" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    {!! $item->content !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>

@endsection